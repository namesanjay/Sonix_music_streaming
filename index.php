<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <header>
            <div class="logo">SONIX</div>
            <input type="text" id="searchbar" placeholder="Search your favorite music...">
            <nav id="nav">
                <a href="#">Home</a>
                <a href="#">My Music</a>
            </nav>
            <div class="auth-buttons">
                <button class="signup" onclick="sign()">Sign-up</button>
                <button class="login" onclick="log()">Login</button>
            </div>
        </header>
        <main>
            <div>
                <img id="thumbnail" src="thumbnail.jpg" alt="No Internet connection">
            </div>
            <div class="cont first"><h3>Recents<h3></div>
            <div class="cont first"><h3>Favorites</div><br>
            <div class="cont second"><h3>Playlist<h3></div>
            <div class="cont second"><h3>Liked<h3></div>
        </main>
        <div class="trending-songs">
                    <h3>Trending Songs</h3><br><br>
                    <ul>
                        <li>Just Like You - Justin Beiber</li>
                        <li>Just Like You - Justin Beiber</li>
                        <li>Just Like You - Justin Beiber</li>
                        <li>Just Like You - Justin Beiber</li>
                        <li>Just Like You - Justin Beiber</li>
                        <li>Just Like You - Justin Beiber</li>
                    </ul>
        </div>
        <div id="release">
            <h1>New Release</h1>
        </div>
        <div class="music-player">
        <div class="progress-container">
            <span class="current-time">01:43</span>
            <div class="controls">
                <button class="prev-btn">&#9664;</button>
                <button class="play-btn">&#9654;</button>
                <button class="next-btn">&#9654;&#9654;</button>
            </div>
            <span class="total-time">04:02</span>
        </div>
        <div class="song-info">
            <!-- <img src="https://i.ytimg.com/vi/QAm3EqfsUSI/maxresdefault.jpg" alt=""> -->
            <div class="song-title">Just Like you</div>
            <div class="singer">Singer - Justin Beiber</div>
        </div>
    </div>
    <script>
        function sign(){
            location.href="signup.html";
        }
        function log(){
            location.href="login.html";
        }
    </script>
</body>
</html>