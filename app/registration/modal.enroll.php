       <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-body">

                       <h4 class="mt-0 header-title">Enroll Student</h4>
                       <p class="text-muted mb-4 font-13" id="enroll-student-info">
                           <code> Please fill out the required details below to enroll a new student.</code>
                       </p>


                       <div class="row">

                           <div class="col-md-5 col-sm-12">
                               <form id="regForm" action="" novalidate="">
                                   <input type="text" name="" id="reg_id" style="display: none;">
                                   <input type="text" name="" id="sec_uid" style="display: none;">
                                   <div class="form-group">
                                       <label>Full Name</label>
                                       <input type="text" class="form-control text-capitalize" id="reg_fullname" readonly placeholder="">
                                   </div>
                                   <div class="form-group">
                                       <label>For Grade</label>
                                       <input type="text" class="form-control" id="reg_grade" oninput="fetchDataWithInput(this.value)" readonly placeholder="">
                                   </div>

                                   <div class="form-group">
                                       <label> Section </label>
                                       <select id="select_grade" class="form-control text-capitalize " required="" onchange="Sec_e(this.value)">
                                       </select>
                                   </div>

                                   <input class="form-control" type="text" name="" id="Sec_val_s" readonly>
                                   <div class="form-group mt-4">
                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                           Enroll student
                                       </button>
                                       <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal">
                                           Cancel
                                       </button>
                                   </div>
                               </form>
                           </div>
                           <div class="col-md-7 col-sm-12 border-left border-2">
                               <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                                   <table class="table table-striped mb-0 ">
                                       <thead>
                                           <tr>
                                               <th>Subject</th>
                                               <th>Time</th>
                                               <th>Days</th>
                                               <th>Teacher</th>
                                           </tr>
                                       </thead>
                                       <tbody id="sub">
                                           <!-- Your table rows go here -->
                                       </tbody>
                                   </table>
                               </div>


                           </div>

                       </div>


                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>