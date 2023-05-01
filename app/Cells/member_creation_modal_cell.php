<div class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Member</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">

                <!-- Add member form -->
                <form action="<?= route_to('create-member-v1') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value=""
                               placeholder="Your name">
                        <!--                        <span class="text-danger">{ $message }</span>-->

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value=""
                               placeholder="Your email">
                        <!--                        <span class="text-danger">{ $message }</span>-->
                    </div>

                    <div class="mb-3">
                        <label for="school" class="form-label">School</label>
                        <select multiple class="form-control" id="school" name="school_ids[]">
                            <option value="1">Super awesome school</option>
                            <option value="2">My school</option>
                            <option value="3">Your awesome school</option>
                        </select>
                        <!--                        <span class="text-danger">{{ $message }}</span>-->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <!-- End Add member form -->
            </div>

        </div>
    </div>
</div>
