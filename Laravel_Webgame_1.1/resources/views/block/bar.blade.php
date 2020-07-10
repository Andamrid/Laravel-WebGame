<nav class="navbar navbar-expand-lg navbar-light bg-info">         
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/ala-logo.png') }}" class="d-inline-block  abnfalign-top"  width="100" height="100" alt="">             
    </a>                     
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" action="">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="
                            Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit">Tìm kiếm
                        </button>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thể loại
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hành động</a>
                        <a class="dropdown-item" href="#">Hack não</a>
                        <a class="dropdown-item" href="#">Nhập vai</a>
                        <a class="dropdown-item" href="#">Gia đình</a>
                        <a class="dropdown-item" href="#">Chiến Thuật</a>
                        <a class="dropdown-item" href="#">16+ </a>
                        <a class="dropdown-item" href="#">18+ </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Khác </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Xếp hạng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Game mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Game đề cử</a>
                </li>                                                           
            </ul>                       
            <ul  class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create">Đăng ký</a>
                </li>                    
            </ul>            
    </div>
</nav>