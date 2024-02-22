<div class="content row">
    <!-- ------------ -->
    <!-- Website Info -->
    <!-- ------------ -->

    <div class="col-md-6 px-3 pb-2">
        <form method="post" name="website-form">
            <div class="card row">
                <h5 class="card-header">Website Info</h5>

                    <!-- Logo -->

                    <div>
                        <div class="col-md-6">
                        <label for="logo" class="col-form-label">Logo</label>
                        </div>

                        <div class="col-md-8 flex-wrap">
                        <input type="file" class="form-control" name="logo" id="logo" value="<?php echo $config['logo']; ?>">
                        </div>
                        <div class="p-2">
                            <img src="<?php echo $config['logo'];?>">
                        </div>
                    </div>

                    <!-- Adress -->

                    <div>
                        <div class="col-md-6">
                            <label for="adress" class="col-form-label">Adrese</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="text" id="adress" name="adress" class="form-control" placeholder="Adrese" value="<?php echo $config['adress']; ?>">
                        </div>
                    </div>

                    <!-- Email -->

                    <div>
                        <div class="col-md-6 ">
                            <label for="email" class="col-form-label">Epasts</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Epasts" value="<?php echo $config['email']; ?>">
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="">
                        <div class="col-md-6">
                            <label for="phone" class="col-form-label">Telefons</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2">
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefons" value="<?php echo $config['phone']; ?>">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <button type="submit" class="btn btn-primary"  name="submit-webform">Submit</button>
                    </div>
            </div>
        </form>
        <?php 


    ?>
    </div>
    

    <!-- ---------- -->
    <!-- Admin Info -->
    <!-- ---------- -->

    <div class="col-md-6 px-3">
            <form method="post" name="admin-form">
            <div class="card bg-danger-subtle row">
                <h5 class="card-header bg-danger">Admin Info</h5>

                    <!-- username -->

                    <div>
                        <div class="col-md-6">
                            <label for="username" class="col-form-label">Username</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo $admin['username']; ?>">
                        </div>
                        
                    </div>

                    <!-- email -->

                    <div>
                        <div class="col-md-6">
                            <label for="email" class="col-form-label">Epasts</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Epasts" value="<?php echo $admin['email']; ?>">
                        </div>
                    </div>

                    <!-- change password -->

                    <div>
                        <div class="col-md-6 ">
                            <label for="password" class="col-form-label">Password</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <button type="submit" class="btn btn-primary" name="submit-adminform">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>