<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/desktop-1.css') }}" >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto Mono:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Solway:wght@400&display=swap"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/anchor.css') }}" >
  </head>
  <body>
    <div class="desktop-1">
      <header class="navigation">
        <div class="vector-group">
          <img
            class="vector-icon2"
            loading="lazy"
            alt=""
            src="./public/vector1.svg"
          />

          <div class="listingscom-wrapper">
            <h2 class="listingscom">Listings.com</h2>
          </div>
        </div>
        <div class="my-listing-page-parent">
          <div class="my-listing-page">MY-LISTING PAGE</div>
          <div class="contact-us">
            <a href="../../../../../Contact_us/index.html" target="_blank">Contact Us</a>
          </div>
        </div>
      </header>
      <section class="text-content-heading">
        <h3 class="heading">About Us</h3>
        <div class="subheading">Our Services</div>
      </section>
      <section class="card-content-parent">
        <div class="card-content">
          <div class="card">
            <img class="info-icon" alt="" src="./public/info.svg" />

            <div class="body">
              <div class="text">
                <h3 class="title">Add Task</h3>
                <div class="body-text-for">Add Task/comments</div>
              </div>
              <div class="button-group">
                <div class="button">
                  <img class="star-icon" alt="" src="./public/star.svg" />

                  <div class="button1">Button</div>
                  <img class="x-icon" alt="" src="./public/x.svg" />
                </div>
                <div class="button2">
                  <img class="star-icon1" alt="" src="./public/star.svg" />

                  <div class="button3">Button</div>
                  <img class="x-icon1" alt="" src="./public/x.svg" />
                </div>
              </div>
            </div>
            <div>
              <a href="todolist/create" class="clickme"
                >Click Me!</a
              >
            </div>
          </div>
          <img class="vector-icon3" alt="" src="./public/vector-11.svg" />
        </div>
        <div class="card-parent">
          <div class="card1">
            <img class="info-icon1" alt="" src="./public/info.svg" />

            <div class="body1">
              <div class="text1">
                <h3 class="title1">My Todo's</h3>
                <div class="body-text-for1">View your tasks</div>
              </div>
              <div class="button-group1">
                <div class="button4">
                  <img class="star-icon2" alt="" src="./public/star.svg" />

                  <div class="button5">Button</div>
                  <img class="x-icon2" alt="" src="./public/x.svg" />
                </div>
                <div class="button6">
                  <img class="star-icon3" alt="" src="./public/star.svg" />

                  <div class="button7">Button</div>
                  <img class="x-icon3" alt="" src="./public/x.svg" />
                </div>
              </div>
            </div>
            <div>
              <a href="todolist/mytasks" class="clickme">My Tasks</a>
            </div>
          </div>
          <img
            class="mdidelete-icon"
            loading="lazy"
            alt=""
            src="./public/mdidelete.svg"
          />

          <div class="lets-iconsdone-ring-round"></div>
        </div>
        <div class="card-content1">
          <div class="card2">
            <img class="info-icon2" alt="" src="./public/info.svg" />

            <div class="body2">
              <div class="text2">
                <h3 class="title2">Delete Task</h3>
                <div class="body-text-for2">Delete items</div>
              </div>
              <div class="button-group2">
                <div class="button8">
                  <img class="star-icon4" alt="" src="./public/star.svg" />

                  <div class="button9">Button</div>
                  <img class="x-icon4" alt="" src="./public/x.svg" />
                </div>
                <div class="button10">
                  <img class="star-icon5" alt="" src="./public/star.svg" />

                  <div class="button11">Button</div>
                  <img class="x-icon5" alt="" src="./public/x.svg" />
                </div>
              </div>
            </div>
            <div>
              <a href="todolist/irrelevant" class="clickme">Delete item</a>
            </div>
          </div>
          
          <div class="mdidelete"></div>
          <img class="vector-icon4" alt="" src="./public/vector-21.svg" />
        </div>
      </section>
    </div>
  </body>
  <footer id="my-footer">
    <p class="footnote">Copyright&copy;2024MyListings</p>
  </footer>
</html>
