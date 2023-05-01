<?php

namespace App\Controllers;

use App\Models\Member as MemberModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;
use ReflectionException;

class Member extends BaseController
{

    /**
     * @throws ReflectionException
     */
    public function storeMember(): \CodeIgniter\HTTP\ResponseInterface
    {
        $memberData = $this->request->getPost();

        // Validation using the controller's validate method
        $validated = $this->validateData($memberData, [
            'name' => 'required|max_length[50]',
            'email' => 'required|valid_email|max_length[100]',
            'school_ids' => 'required|is_array'
        ]);

        if (!$validated) {
            return redirect('home-v1')->with('errors', $this->validator->getErrors());
        }

        // Store the new submitted member
        $memberModel = new MemberModel();
        $memberModel->insert([
            'email' => $memberData['email'],
            'name' => $memberData['name']
        ]);

        return redirect('home-v1')->with('message', 'Member successfully saved');
    }
}
