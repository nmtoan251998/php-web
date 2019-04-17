<nav class="navbar navbar-light bg-light navbar-expand-sm">
    <a href="#" class="navbar-brand mr-5">
        <img 
            src="/public/img/" 
            alt="logo" 
            width="30" 
            height="30"
            class="rounded-circle">
    </a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/page/manageBlog.php">Manage blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/page/newBlog.php">New blog</a>
            </li>
        </ul>
    </div>
    
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item active">
            <button type="button" class="btn btn-dark position-absolute new__blog-badge" style="top: 15%; right: 1%;">
                New blog today <span class="badge badge-light badge-pill">4</span>
            </button>
        </li>
    </ul>
</nav>