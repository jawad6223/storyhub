<div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                      
                            <li class="nav-item">
                            <a class="nav-link menu-link" href="{{url('admin/dashboard')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>

                        </li> <!-- end Dashboard Menu -->

                       
                  <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/view_story')}}">
                      <i class="ri-folder-history-fill"></i> <span data-key="t-authentication">Story Hub</span>
                 
                      </a>
                  </li>

                      <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/profile')}}">
                      <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Profile</span>
                 
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/add_story')}}">
                      <i class=" ri-file-history-fill"></i> <span data-key="t-apps">Share New Story</span>
                 
                      </a>
                  </li>

                  <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="{{url('admin/add_story')}}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class=" ri-file-history-fill"></i> <span data-key="t-apps">Post A Story</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/add_story')}}" class="nav-link" data-key="t-calendar">Add Story</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/view_story')}}"class="nav-link" data-key="t-chat"> View Story </a>
                                    </li>
                                   
                               
                                </ul>
                            </div>
                        </li> -->

                  </li> <!-- end Dashboard Menu -->
                  <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/subscription_pkg')}}">
                      <i class=" ri-red-packet-fill"></i> <span data-key="t-authentication">Subscription Package</span>
                 
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/story_category')}}">
                      <i class=" ri-service-fill"></i> <span data-key="t-authentication">Story Category</span>
                 
                      </a>
                  </li>


                       

                      

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps1">
                                <i class="ri-team-fill"></i> <span data-key="t-apps">Subscribers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps1">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/active_sub')}}" class="nav-link" data-key="t-calendar">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/block_sub')}}"class="nav-link" data-key="t-chat"> Block </a>
                                    </li>
                                   
                               
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                      <a class="nav-link menu-link" href="{{url('admin/transaction')}}">
                      <i class="ri-money-dollar-circle-line"></i> <span data-key="t-authentication">Transactions</span>
                 
                      </a>
                  </li>


                    </ul>
                </div>