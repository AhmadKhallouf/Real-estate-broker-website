<div>
    {{-- Success is as dangerous as failure. --}}
    <section>
        <h1 class="heading">Monitoring Panel &nbsp; <button wire:click="render"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
          </svg></button></h1>
               <div class="row">
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">{{ $active_posts }}</h3>
                             
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-success ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                              <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                              <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5m6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                            </svg>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Active Posts</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">{{ $pending_posts }}</h3>
                             
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-success" style="background-color:#f1f503;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                              <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                            </svg>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Pending Posts</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">{{ $expired_posts }}</h3>
                             
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard2-x-fill" viewBox="0 0 16 16">
                              <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                              <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z"/>
                            </svg>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Expired Posts</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">{{ $number_of_users }}</h3>
                              
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-danger" style="border-radius: 25%; background-color:blue;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Number Of Users</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">{{ $number_of_admins }}</h3>
                              
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-purple" style="border-radius: 25%;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Number Of Admins</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">{{ $blocked_user }}</h3>
                             
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-danger" style="border-radius: 25%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                              <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Blocked Users</h6>
                     </div>
                   </div>
                 </div>
  
                </div>
                 
           
  
     </section>
</div>
<br><br><br>


