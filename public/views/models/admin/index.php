<?php
require_once 'menu.php';

?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid container-center-center">
<!--
                 contenido pagina principal del trabajador -->
                <div class="row">
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
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

                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/logo.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Niveles Disponibles</p>
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
                                            <img src="../../../assets/images/chrono.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Avatars Activos</p>
                                            <h3 class="text-white">230</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body container-table">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Estadisticas</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Actividad Jugadores</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Actividad</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
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
				</div>
            </div>
        </div>

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

        <!-- Datatable -->
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

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