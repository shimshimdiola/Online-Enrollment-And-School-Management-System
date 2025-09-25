     <!--  Modal content for the above example -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
             <div class="modal-content">

                 <div class="modal-body">

                     <h4 class="mt-0 header-title">Add user</h4>
                     <p class="text-muted mb-4 font-13" id="add-user-info">
                         Provide the necessary information below to add a new user.
                     </p>

                     <form id="addUser" class="" action="" novalidate="">
                         <div class="form-group">
                             <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo Base_dir ?>assets/images/users/avatar-6.jpg">
                         </div>
                         <div class="form-group">
                             <label>Name <small>( Eastern name order)</small></label>
                             <input type="text" id="name" class="form-control" required="" placeholder="Sample Name, M.">
                         </div>
                         <div class="form-group">
                             <label>Position</label>
                             <select id="position" class="form-control" required oninput="G_s(this.value)">
                                 <option></option>
                                 <option value="faculty">Faculty</option>
                                 <option value="registrar">Registrar</option>
                                 <option value="admin">Admin</option>
                             </select>
                         </div>
                         <div class="form-group" id="H_d" style="display: none;">
                             <label>Grade lvl</label>
                             <select id="grade" class="form-control">
                                 <option></option>
                                 <option>7</option>
                                 <option>8</option>
                                 <option>9</option>
                                 <option>10</option>
                                 <option>11</option>
                                 <option>12</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Username</label>
                             <input type="text" id="username" class="form-control" required="" placeholder="Sample Name, M.">
                         </div>
                         <div class="form-group">
                             <label>Password</label>
                             <div>
                                 <input type="password" id="pass2" class="form-control" required="" placeholder="Password">
                             </div>
                             <div class="m-t-10">
                                 <input type="password" id="confirmPass" class="form-control" required="" placeholder="Re-Type Password">
                             </div>
                         </div>
                         <div class="form-group mb-0">
                             <div>
                                 <button type="submit" id="submitBtn" class="btn btn-primary waves-effect waves-light">
                                     Submit
                                 </button>
                                 <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal">
                                     Cancel
                                 </button>
                             </div>
                         </div>
                     </form>

                 </div>
             </div>
             <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->