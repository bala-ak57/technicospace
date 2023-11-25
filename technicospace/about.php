<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="style_about.css">
</head>
<body>
  <div class="section">
    <div class="container">
      <div class="image-section">
        <img src="student.jpg" alt="">
      </div>
      <div class="content-section">
        <div class="title">
          <h2>ABOUT US</h2>
        </div>
        <div class="content">
          <h3>Oneyes <span class="Heading3" >Learning Management System</span></h3>
          <p>
            Welcome to Oneyes - Your Gateway to Unlimited Knowledge and Skill Enhancement!<br />

            <br />At Oneyes, we believe in the transformative power of education. Our mission is to provide learners around the world with an accessible, high-quality, and personalized learning experience that empowers them to thrive in their careers and personal development.<br /><span id="dots">.....</span>
            
            <span id="invisible-text"><br />
             
            <br />In 2007, Oneyes founders Eren Bali and Oktay Caglar built a software for a live virtual classroom while living in Turkey. They saw potential in making the product free for everyone, and moved to Silicon Valley to found a company two years later. The site was launched by Bali, Oktay Caglar and Gagan Biyani in early 2010.
            In February 2010, the founders tried to raise venture capital funding, but the idea failed to impress investors and they were rejected 30 times, according to Gagan Biyani. In response to this, they bootstrapped the development of the product and launched Udemy—"The Academy of You"—in May 2010.Within a few months, 1,000 instructors had created about 2,000 courses, 
            and Udemy had nearly 10,000 registered users. Based on this favorable market reaction, they decided to attempt another round of financing, and raised $1 million in venture funding by August<br /></span></p>

            <button id="btn" onclick="ReadMoreLess()" >Read More</button>
        </div>
      </div>
    </div>
 </div>

 <script>
  function ReadMoreLess(){
  var dots = document.getElementById("dots");
  var invisibleText = document.getElementById("invisible-text");
  var btnText = document.getElementById("btn");
  if(dots.style.display !="none"){
    dots.style.display = "none"
    invisibleText.style.display = "inline"
    btnText.innerHTML = "Read Less"
  }
  else{
    dots.style.display = "inline"
    invisibleText.style.display = "none"
    btnText.innerHTML = "Read More"
  }
 }
 </script>
</body>
</html>