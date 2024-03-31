<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dahsboard - Akunime</title>
</head>
<body>
<div class="nav-flex">
    
<nav id="sidebar" class="sidebar d-none">
    <div class="side-head">
    <h2 class="title">Akunime</h2>
    <i id="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></i>
    </div>
    <div class="side-link">
    <a href="">Dashboard</a>
    <a href="">Dashboard</a>
    <a href="">Dashboard</a>
    </div>
</nav>
<nav class="navbar">
    <div class="nav-head">
    <i id="open"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg></i>
        <h2 class="title">Dashboard</h2>
    </div>
</nav>
</div>


<style type="text/css">
/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-tap-highlight-color: transparent;
}


/* ===== Colours ===== */
:root{
    --body-color: #1f1d2b;
    --nav-color: #1f1d2b;
    --side-nav: #1f1d2b;
    --nav-text: #FFF;
    --title-color: #FFF;
    --text-color: #FFF;
    --search-bar: #353340;
}

body {
    background-color: var(--body-color);
}

.nav-flex {
    display: flex;
}

.side-head {
    padding: 3px 5px;
    display: flex;
    justify-content: space-between;
}
svg {
    margin-top: 5px;
    fill: var(--text-color);
    vertical-align: middle;   
}
.title {
    color: var(--text-color);
    font-weight: bold;
}

.sidebar {
    width: 200px;
    height: 100%;
    border-right: 1px solid var(--text-color);
    background-color: var(--body-color);
}

.side-link {
    margin: 15px 0;
}

.side-link a {
    appearance: none;
    text-decoration: none;
    color: var(--text-color);
    font-weight: 800;
    width: 100%;
    padding: 8px 54px;
    display: block;
    &:hover {
    background-color: var(--search-bar);

    }
}

 /* MEDIA QUERY FOR SIDEBAR */
    @media (min-width: 850px) {
        .sidebar {
            position: static;
            display: none;
        }

        .d-none {
            display: block;
        }

        #close {
            display: none;
        }
    }

    @media (max-width: 849px) {
        .sidebar {
            position: absolute;
        }

        .d-none {
            display: none;
        }

        #close {
            display: block;
        }
    }

/* NAVBAR */
.navbar {
    padding: 3px 5px;
    background-color: var(--search-bar);
    width: 100%;
    height: 41px;
}

.nav-head {
    display: flex;
    gap: 5px;
}



</style>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
  const sidebar = document.getElementById("sidebar");
  const close = document.getElementById("close");
  const open = document.getElementById("open");

  close.addEventListener("click", () => {
    sidebar.classList.toggle("d-none");
  });

  open.addEventListener("click", () => {
    sidebar.classList.toggle("d-none");
  });
});
</script>
</body>
</html>