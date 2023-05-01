<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TCT Members</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!--  Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        .tct-title-primary {
            font-size: 24px;
        }

        .tct-title-secondary {
            font-size: 20px;
        }
    </style>
</head>
<body class="container py-4 px-3 mx-auto">

<nav class="navbar bg-light">
    <div class="container-fluid">
        <h1 class="navbar-brand mb-0 tct-title-primary">TCT</h1>
    </div>
</nav>

<div class="tct-wrapper row mt-4">
    <div class="tct-schools-list col-4">

        <!-- List all schools -->
        <h3 class="tct-title-secondary">
            All Schools

            <a href="#" class="mx-2 badge text-dark bg-info bg-opacity-25 border-dark rounded-3">Clear
                selection</a>
        </h3>

        <ul class="list-group list-group-flush mt-4 ">
            <?php foreach ($schools as $school): ?>
            <li class="list list-style-none">
                <a href="#" class="list-group-item  row"
                   aria-current="true">
                    <span><?= $school['name'] ?></span>
                    <span class="badge bg-info bg-opacity-25 text-dark"><?= "" ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <!-- End List all schools -->
    </div>

    <div class="tct-members-list col-8 overflow-scroll">

        <div class="row justify-content-between">
            <h3 class="col-8 tct-title-secondary">All Members</h3>

            <button type="button" class="col-3 mx-2 btn btn-sm btn-outline-secondary h-25" data-bs-toggle="modal"
                    data-bs-target="#memberModal" id="openMemberModal">Add Member
            </button>
            <!-- Include the modal with the form to add a new member -->
           <?= view_cell('App\Cells\MemberCreationModal') ?>

        </div>

        <!-- List all members -->
        <table class="table table-bordered table-responsive  mt-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">School (s)</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($members as $member): ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $member['name'] ?></td>
                    <td><?= $member['email'] ?></td>
                    <td>
                        <ol class="list-group list-group-flush list-group-numbered">
                            <li class="list-group-item border-0 fw-bold">Super Awesome school</li>
                        </ol>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End List all members -->
    </div>
</div>

<!--<script type="module">-->
<!--    document.getElementById('openMemberModal').click();-->
<!--</script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
