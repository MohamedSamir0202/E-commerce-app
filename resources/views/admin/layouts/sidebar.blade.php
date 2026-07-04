<div class="text-white position-fixed top-0 start-0 vh-100"
     style="width:300px; background-color:#3d74dc;">

    <div class="text-center py-4 border-bottom">

        <img src="/images/logo.png"
             class="img-fluid mb-3"
             width="80"
             alt="Logo">

        <h3 class="fw-bold">Dashboard</h3>

    </div>

    <ul class="nav flex-column p-3">

        <li class="nav-item mb-2">
            <a href="{{ route('home') }}"
               class="nav-link text-white border rounded-pill text-center">

                Home

            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}"
               class="nav-link text-white border rounded-pill text-center">

                Users

            </a>
        </li>

    </ul>

</div>
