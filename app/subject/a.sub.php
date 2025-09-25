     <!--  Modal content for the above example -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
             <div class="modal-content">

                 <div class="modal-body">

                     <h4 class="mt-0 header-title">Add Subject</h4>
                     <p class="text-muted mb-4 font-13" id="add-user-info">
                         Please fill out the required details below to add a new subject.
                     </p>



                     <form id="subForm" class="" action="" novalidate="">
                         <div class="form-group">
                             <label>Grade level</label>
                             <input readonly id="sub_g" type="text" class="form-control" required="" placeholder="--------------">
                         </div>
                         <div class="form-group">
                             <label>Subject</label>
                             <input id="subject" type="text" class="form-control" required="" placeholder="--------------">
                         </div>

                 
                         <div class="form-group mb-0">
                             <div>
                                 <button id="submitButton" type="submit" class="btn btn-primary waves-effect waves-light">
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