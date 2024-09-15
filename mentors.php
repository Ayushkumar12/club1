<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/member.css" />
    <script src="js/read.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://uctf.ir/css/bootstrap4-neon-glow.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="http://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css"
    />
    <link rel="stylesheet" href="css/main.css" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Mentors</title>
</head>
  <body class="imgloadedf">
  <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    <br />
    <br />
    <br />

    <section class="text-gray-600 " style="position: relative; margin-top: 20px;">
      <h1 class="display-1 bold color_white content__title text-center">
      <span class="color_danger">Men</span>tors<span class="vim-caret sp">&nbsp;</span>
      </h1>
      <br />
      <br />
      <div class="flex flex-col md:flex-row">
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/geeta.png" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Dean of School</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Prof.(Dr). Geetha Bhavani</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Dr.A. Geetha Bhavani is Dean, School of Sciences. She received Ph.D.
                Heterogeneous Catalysis in 2007 from Anna University. In 2007 joined R&D Centre, Chennai Petroleum
                Corporation Ltd (IOCL) and experienced on novel catalyst synthesis and testing in pilot plant on all
                catalytic reforming reactions and developed the catalyst for desulphurisation with collaborative project
                on IIT-Madras.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/Alok.png" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Alok Sharma</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">
                Dr. Alok Singh Sengar is an Associate Professor in the Department of Computer Science at Noida
                International University, Greater Noida, with over 15 years of experience in teaching and research. He
                holds a Doctorate in Computer Science and Engineering from OPJS University, Churu, Rajasthan, an M.Tech.
                degree in Software Engineering from Dr. A. P. J. Abdul Kalam Technical University, Lucknow, and an M.
                Phil. degree in Instrumentation from the Indian Institute of Technology Roorkee, Uttarakhand. His diverse
                educational background and extensive experience make him a multidisciplinary researcher.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/deepaka.jpg" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Coordinator</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Deepka Sharma</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Dr. Deepika Sharma have spent years researching and studying the art of
                motivation, and thrilled to share her knowledge and expertise with us. She has good knowledge in
                Computer applications like Image processing, forensics, Image Forgery, software Project Management and
                database management system..</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
  
          </div>
        </div>
      </div>
      <div class="flex flex-col md:flex-row">
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/Neelam.png" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Ms. Neelam Gupta</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Neelam Gupta is an Assistant Professor at School of Science (SOS), 
              Noida International University, Yamuna Expy, Sector 17A, Uttar Pradesh, India. She has a bachelor’s degree in
              computer applications from CCSU, Meerut (UP).  She has completed her post-graduation in Master of Computer Applications 
              from AKTU, Lucknow (UP) and Ph.D. in (IT) from Amity University, Noida, Uttar Pradesh. She has one years of teaching and 
              research experience. Her area of research includes Software Defined Networking (SDN),
              Blockchain, Internet of Things, Networking, and security.
              With deep interest in the field of computer science, she has a penchant for teaching IT Subjects.  Her core areas of interest lie 
              in Knowledge Management, Learning Analytics, Information Systems.  She has publications in various international and national journals of repute.  </span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/nija.jpg" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Nija Mani</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Dr. Nija Mani As an educator, I find profound fulfilment in helping
                students unlock the mysteries of numbers, equations, and the beauty that lies within ,mathematical
                concepts. I have the privilege of guiding students through the fascinating journey of mathematical
                discovery. I'm always eager to connect with fellow educators, students, or anyone passionate about the
                transformative power of mathematics education.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
  
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/Dr. Rashmi Dahiya.jpg"
            alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Rashmi Dahiya</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Dr. Rashmi Dahiya, Assistant Professor has spent more than 7 years of
                teaching in different
                fields of Computer Science. She has good knowledge of Data Structure and Web
                technologies. She aims to create a dynamic platform in skill development and motivating
                students to participate in different curricular activities.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-col md:flex-row">
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/gagan sir.jpg" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Prof.(Dr.) Gagan Tiwari</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">(Dr.) Gagan Tiwari, have 22+ years of teaching experience,
                specializes in Algorithm Design, Automata Theory, Machine Learning, and Neural Networks. A senior IEEE
                member, he actively contributes as a Reviewer and Editor. His prolific publication record includes
                Scopus indexed International and National Conferences and Journals. His core mission is creating a
                tech platform for students for the modern tech era, shaping future technologically savvy
                individuals.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/hassan.jpg" alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
              Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Prof. (Dr.) Yazdani Hasan</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content">Prof. (Dr.) Yazdani Hasan is a highly experienced computer science
                educator with over 19 years of teaching at various academic levels. Known for superb teaching skills,
                excellent communication with students, and a diplomatic approach to issue resolution, Prof. Hasan has
                supervised numerous postgraduate and Ph.D. scholars.He interested in developing interdisciplinary
                programs and strong commitment to teaching & research excellence.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
  
          </div>
        </div>
        <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden" style="backdrop-filter: blur(20px)">
          <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/Dr. Saurabh Kumar.jpg"
            alt="photo">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
              Mentor</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Saurabh Kumar</h1>
            <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
              x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
              <span x-text="show ? text : content"> Dr. Saurabh Kumar is an Assistant Professor at Noida International
                University with nine years of
                teaching experience. He holds a Ph.D. in Image Processing, Machine Learning, Remote Sensing, and GIS.
                His research focuses on Digital Image Processing, Remote Sensing, GIS, Artificial Intelligence, and
                Machine Learning. Dr. Kumar has published patents, a book, and numerous research papers in esteemed
                journals and conferences.</span>
              <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
                x-text="show ? 'show less' : '..read more'"></button>
            </p>
  
          </div>
        </div>
      </div>
      <div class="flex flex-col md:flex-row justify-evenly">
        
      </div>
  
    </section>
</body>

</html>
<?php include 'footer.php'; ?>