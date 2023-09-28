<?php
require_once 'menu.php';

?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
<!--
                 contenido pagina principal del trabajador -->
                <div class="row">
					<div class="col-xl-3 col-xxl-6 co   l-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/group.png" class="la la-users sd-shape"></img>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Partidas Realizadas</p>
                                            <h3 class="text-white">230</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                        <img src="../../../assets/images/anime.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Partidas de Hoy</p>
                                            <h3 class="text-white">230</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/armas-removebg-preview.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Armas Activas</p>
                                            <h3 class="text-white">230</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/hero-banner.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Mundos Activos</p>
                                            <h3 class="text-white">230</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

					<div class="col-xl-4 col-lg-6 col-sm-6">
						<div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="profile-photo">
										<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
									</div>
                                    <h3 class="mt-4 mb-1">Deangelo Sena</h3>
                                    <p class="text-muted">Senior Manager</p>
									<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void();">Folllow</a>
                                </div>
                            </div>

                            <div class="card-footer pt-0 pb-0 text-center">
                                <div class="row">
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1">150</h3><span>Follower</span>
									</div>
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1">140</h3><span>Place Stay</span>
									</div>
									<div class="col-4 pt-3 pb-3">
										<h3 class="mb-1">45</h3><span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="card active_users">
                            <div class="card-header bg-primary border-0 pb-0">
                                <h4 class="card-title text-white">Actividad Clientes</h4>
                                <span id="counter"></span>
                            </div>
							<div class="bg-primary">
								<canvas id="activeUser"></canvas>
							</div>
                            <div class="card-body pt-0">
                                <div class="list-group-flush mt-4">
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 fw-semi-bold border-top-0">
                                        <p class="mb-0">Top Active Pages</p>
                                        <p class="mb-0">Active Users</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/bootstrap-themes/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/tags/html5/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                                        <p class="mb-0">/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                                        <p class="mb-0">/preview/falcon/dashboard/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/100-best-themes...all-time/</p>
                                        <p class="mb-0">1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>

					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
								<div class="profile-photo">
									<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
								</div>
								<h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
								<p class="text-white mb-0">Senior Manager</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Gender</span> <strong class="text-muted">Female	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted">Age: 24	</strong></li>
							</ul>
                            <div class="card-footer border-0 mt-0">
								<button class="btn btn-primary btn-lg btn-block">
									<i class="fa fa-bell-o"></i> Reminder Alarm
								</button>
                            </div>
                        </div>
					</div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/04/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/07/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2009/01/12</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Cedric Kelly</td>
                                                <td>Developer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/03/29</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2008/11/28</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Brielle Williamson</td>
                                                <td>Specialist</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/12/02</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/08/06</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Rhona Davidson</td>
                                                <td>Integration</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/10/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2009/09/15</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2008/12/13</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2008/12/19</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2013/03/03</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2008/10/16</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/12/18</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/03/17</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
												<td>2012/11/27</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Paul Byrd</td>
                                                <td>Financial Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/06/09</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2009/04/10</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/10/13</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2012/09/26</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/09/03</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Yuri Berry</td>
                                                <td>Marketing Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2009/06/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/12/12</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/09/20</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Angelica Ramos</td>
                                                <td>Executive Officer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2009/10/09</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/12/22</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/11/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/06/07</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Fiona Green</td>
                                                <td>Operating Officer</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2010/03/11</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/08/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ward No.</th>
                                                <th scope="col">Patient</th>
                                                <th scope="col">Dr Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Bills</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>Mr. Bobby</td>
                                                <td>Dr. Jackson</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                                <td>$120</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();;">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 </td>
                                                <td>Mr. Dexter</td>
                                                <td>Dr. Charles</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>$540</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();;">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>Mr. Nathan</td>
                                                <td>Dr. Frederick</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                                <td>$301</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();;">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Mr. Aurora</td>
                                                <td>Dr. Roman</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$099</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();;">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>Mr. Matthew</td>
                                                <td>Dr. Samantha</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$520</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();;">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
						<div class="card text-white bg-primary">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
						<div class="card text-white bg-warning text-black">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
						<div class="card">
                            <div class="card-body text-center ai-icon  text-primary">
								<svg id="rocket-icon" class="my-2" viewbox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<h4 class="my-2">You don’t have badges yet</h4>
								<a href="javascript:void();;" class="btn my-2 btn-primary btn-lg px-4"><i class="fa fa-usd"></i> Earn Budges</a>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Blood pressure</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-primary mb-0">120/89</h3>
											<span>mmHG</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="spark-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Heart Rate</h3>
											<span class="text-danger">Above the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-danger mb-0">107</h3>
											<span>Per Min</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="composite-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Glucose Rate</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-success mb-0">97</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline8"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Clolesterol</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-info mb-0">124</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline9" class="height80;"></div>
										</div>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">Deangelo Sena</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Female</h4>
											<small>Patient Gender</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Age: 24</h4>
											<small>Years Old</small>
										</div>
									</div>
								</div>
                            </div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-lg btn-block">View Profile</button>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-primary">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-end">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_1"></canvas>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-success">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-end">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5>3650</h5>
                                        <span>VIEWS OF YOUR PROJECT</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="text-uppercase">74,206 K</h4>
										<span>Lifetime earnings</span>
									</div>
									<div class="col-auto">
										<div class="chart-wrapper height100">
											<canvas id="chart_widget_7"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="chart_widget_6"></div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_3"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="fw-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase fw-normal">Market Now</h4>
                                <h2 class="fw-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="fw-normal">APPL</h5>
                                        <span class="text-success">+ 82.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="fw-normal">FB</h5>
                                        <span class="text-danger">- 12.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="fw-normal">GOOG</h5>
                                        <span class="text-success">+ 42.24 %</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase fw-normal">Sales Analysis</h4>
                                <h2 class="fw-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="fw-normal">Today</h5>
                                        <span class="text-success">+ 8224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="fw-normal">Today</h5>
                                        <span class="text-danger">- 1224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="fw-normal">Week</h5>
                                        <span class="text-success">+ 4224</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_9"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/4.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-info">
													<img alt="image" width="50" src="images/avatar/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-success">
													<img alt="image" width="50" src="images/avatar/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_10"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-8 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="card">
									<div class="row no-gutters">
										<div class="col-5 p-0">
											<div class="card-body">
												<h6 class="fw-normal text-uppercase">Weekly sales</h6>
												<h4>$ 14000</h4>
												<div>
													<span class="badge badge-light">60%</span>
													<span>Higher</span>
												</div>
											</div>
										</div>
										<div class="col-7 p-0">
											<div class="chart-wrapper">
												<canvas id="chart_widget_11"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_14"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_15"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-4 col-lg-12">
                        <div class="card">
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_16"></canvas>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Status</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-facebook">
								<span class="s-icon"><i class="fab fa-facebook-f"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-linkedin">
								<span class="s-icon"><i class="fab fa-linkedin-in"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-googleplus">
								<span class="s-icon"><i class="fab fa-google-plus-g"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-twitter">
								<span class="s-icon"><i class="fab fa-twitter"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

	<?php
require_once 'footer.php';

?>
	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */

			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					800:{
						items:1
					},
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>

</body>
</html>