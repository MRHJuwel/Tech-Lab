<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Catagory">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blogs">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button"><i class="bi bi-briefcase"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="All Comments">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-comment" type="button"><i class="bi bi-command"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="All Team Member">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-team" type="button"><i class="bi bi-command"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="All Slider">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-slider" type="button"><i class="bi bi-sliders"></i></button>
            </li>

            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="All Feedback">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-feedback" type="button"><i class="bi bi-sliders"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('admin-assets')}}/assets/images/techlab.png" width="140" alt=""/>
{{--            <h3><span class="text-success">T</span>ech<span class="text-danger">L</span>ab</h3>--}}
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('index')}}" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Catagory</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('catagories.create')}}" class="list-group-item"><i class="bi bi-envelope"></i>Create Catagory</a>
                    <a href="{{route('catagories.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Catagory</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blogs</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('blogs.create')}}" class="list-group-item"><i class="bi bi-envelope"></i>Create Blog</a>
                    <a href="{{route('blogs.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Blog</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-comment">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Comments</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>

                    <a href="{{route('comments.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Comments</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-team">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Team</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>

                    <a href="{{route('teams.create')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Create Team</a>
                    <a href="{{route('teams.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Team</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-slider">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Slider</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>

                    <a href="{{route('sliders.create')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Create Slider</a>
                    <a href="{{route('sliders.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Slider</a>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-feedback">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Feedback</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>

                    <a href="{{route('contacts.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Slider</a>
                </div>
            </div>

        </div>
    </div>
</aside>
