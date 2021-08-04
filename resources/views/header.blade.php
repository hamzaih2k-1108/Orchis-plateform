<style>
    .box {
          background: linear-gradient(to right, #533278, #533278);
          color: white;
          --width: 130px;
          --height: calc(var(--width) / 3);
          width: var(--width);
          height: var(--height);
          text-align: center;
          line-height: center);
          font-size: calc(var(--height) / 2.5);
          font-family: sans-serif;
          border: 1px solid darkgoldenrod;
          border-radius: 2em;
          transform: perspective(500px) rotateY(-15deg);
          text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
          box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
          transition: 0.5s;
          position: relative;
          overflow: hidden;
        }

        .box:hover {
          transform: perspective(500px) rotateY(15deg);
          text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
          box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .box::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          background: linear-gradient(to right, transparent, white, transparent);
          left: -100%;
          transition: 0.5s;
        }

        .box:hover::before {
          left: 100%;
        }
        .search-box{
          width: 300px !important;
        }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/" style="font-family: system-ui;color:#533278"><img src="{{  asset('image/logoOC.png')  }}" style="width: 150px;height: 50px;border-radius:30px" alt="error"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left: 150px">
      <form action="/search" class="d-flex" method="get">
        <input class="search-form search-box" type="text" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-primary btn-lg active" style=" background-color: #533278; height: 95%;text-align:center;  vertical-align:center;font-size:15px;">Search</button>
      </form>
      <li class="nav-item" style="position: absolute;top: 8px;right: 300px;">
        <div class="box">
            <a class="nav-link active" href="register" tabindex="-1" aria-disabled="true" style="color: white">Register</a>
        </div>
      </li>
      <li class="nav-item" style="position: absolute;top: 8px;right: 16px;">
        <div class="box">
            <a class="nav-link active" href="login" tabindex="-1" aria-disabled="true" style="color: white">Connection</a>
        </div>
      </li>
      
    </ul>
</div>
</nav>


