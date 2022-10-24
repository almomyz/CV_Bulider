<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume/CV Design</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="<?php  $V1=$_POST["img"] ;echo $V1;?>" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"> Personal Informatoin :-</p>
           <p class="regular" style="text-align: center;"><?php  $V1=$_POST["name"];
           echo $V1; ?>
        </p>
         </div>
         <ul>

          <li>
            <div class="icon">
              <i class="fas fa-map-signs"></i>
            </div>
            <div class="data">
            <?php  $V1=$_POST["major"];
           echo $V1; ?>
            </div>
          </li>
          <li>

           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
             <?php  $V1=$_POST["addrees"];
           echo $V1; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
             <?php  $V1=$_POST["phone"];
           echo $V1; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
             <?php  $V1=$_POST["eamil"];
           echo $V1; ?>
             </div>
           </li>

           <li>
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="data">
            <?php  $V1=$_POST["prathday"];
           echo $V1; ?>
            </div>
          </li>
          
          <li>
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="data">
            <?php  $V1=$_POST["location"];
           echo $V1; ?>
            </div>
          </li>
          


           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
             <?php  $V1=$_POST["status"];
           echo $V1; ?>
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">Skills:- </p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
             <?php  $V1=$_POST["skill1"];
           echo $V1; ?>
             </div>
             <div class="skill_progress">
               <span style="width:100%;"></span>
             </div>
             <div class="skill_per"><?php  $V1=$_POST["skill_p1"];
           echo $V1."%"; ?></div>
           </li>
           <li>
             <div class="skill_name">
             <?php  $V1=$_POST["skill2"];
           echo $V1; ?>
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per"><?php  $V1=$_POST["skill_p2"];
           echo $V1."%"; ?></div>
           </li>
           <li>
             <div class="skill_name">
             <?php  $V1=$_POST["skill3"];
           echo $V1; ?>
             </div>
             <div class="skill_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="skill_per"><?php  $V1=$_POST["skill_p3"];
           echo $V1."%"; ?></div>
           </li>
           <li>
             <div class="skill_name">
             <?php  $V1=$_POST["skill4"];
           echo $V1; ?>
             </div>
             <div class="skill_progress">
               <span style="width: 50%;"></span>
             </div>
             <div class="skill_per"><?php  $V1=$_POST["skill_p4"];
           echo $V1."%"; ?></div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Languages :-</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Mother Language :- </p>
               <p><?php  $V1=$_POST["M_lung"];
           echo $V1; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"> Other Language :-</p>
               <p><p><?php  $V1=$_POST["O_lung"];
           echo $V1; ?></p></p>
             </div>
           </li>
           
           
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold"> About Me :-</p>
         </div>
        <p><p><?php  $V1=$_POST["About_us"];
           echo $V1; ?></p></p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Experience :-</p>
         </div>
        <ul>
            <li>
                <div class="date"><p><?php  $V1=$_POST["date1"];
           echo $V1; ?></p></div> 
                <div class="info">
                     <p class="semi-bold"><p><?php  $V1=$_POST["work1"];
           echo $V1; ?></p></p> 
        
                </div>
            </li>
            <li>
              <div class="date"><?php  $V1=$_POST["date2"];
           echo $V1; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php  $V1=$_POST["work2"];
           echo $V1; ?></p> 
                  
                </div>
            </li>
            <li>
              <div class="date"><?php  $V1=$_POST["date3"];
           echo $V1; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php  $V1=$_POST["work3"];
           echo $V1; ?></p> 
                 
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold"> Educational :-</p>
         </div>
      <ul>
            <li>
                <div class="date"><?php  $V1=$_POST["date4"];
           echo $V1; ?></div> 
                <div class="info">
                     <p class="semi-bold"><?php  $V1=$_POST["edu1"];
           echo $V1; ?></p> 
                 
                </div>
            </li>
            <li>
              <div class="date"><?php  $V1=$_POST["date5"];
           echo $V1; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php  $V1=$_POST["edu2"];
           echo $V1; ?></p> 
                 
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">The end :)</p>
         </div>
       <ul>
         <li><i class="fas fa-book"></i></li>
         <li><i class="fas fa-gamepad"></i></li>
         <li><i class="fas fa-music"></i></li>
         <li><i class="fab fa-pagelines"></i></li>
      </ul>
    </div>
  </div>
</div>
<center>
<button>Convert to PDF</button>
</center>
</body>
</html>