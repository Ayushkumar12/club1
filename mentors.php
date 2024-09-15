<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Mentors</title>
</head>

<body class="bg-black">
  <div class="mt-16 text-center">
    <h1 class="lg:mb-4 text-center text-4xl text-white font-bold lg:text-6xl">Our Mentors</h1>
    <p class="text-white lg:w-8/12 lg:mx-auto"><b>People of some of the brightest minds and most experienced
        executives.</b></p>
  </div>

  <section class="text-gray-600">
    <div class="flex flex-col md:flex-row">
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets\images\Gurwinder Singh.png"
          alt="photo">
        <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
            Head Of Department</h2>
          <h1 class="title-font text-lg font-medium text-white mb-3">Dr. Gurwinder Singh</h1>
          <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
            x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content">Gurwinder Singh (gurwinder.singh@niu.edu.in) received his BA in
              computer application, MCA, M.Phil., and a Ph.D. degree in computer science from Punjabi University, India,
              in 2008, 2011, 2014, 2016, and 2023, respectively. In 2014, he joined the Creative-i Technologies
              Education and Development Centre, in India, in 2015 to joined the Department of Computer Science at Jasdev
              Singh Sandhu Degree College, India, in 2016 to join the Department of Computer Science at Sri Guru Teg
              Bahadur Khalsa College, Shri Anandpur Sahib, in 2017 to join the Department of Computer Science at Punjabi
              University, India and in 2022, he join the university institute of computing, Chandigarh University, India
              and since 2024, he joined the Department of Computer Science, School of Sciences, Noida International
              University, India. He achieved Young Scientist Award at the 11th National Conference on RACES-2023,
              Multani Mal Modi College, India, he has achieved the Best patent idea presentation award at Chitkara
              University, Himachal Pradesh, India, and also get best publication awards at conferences. His research
              interest includes remote sensing, and digital image processing, in particular, agriculture land use
              classification, machine learning, and deep learning. He is also a member of ISPRS and ISRS.</span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
              x-text="show ? 'show less' : '..read more'"></button>
          </p>

        </div>
      </div>
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <img class="lg:h-auto md:h-36 w-full object-cover object-center" src="assets/images/hod.jpg" alt="photo">
        <div class="p-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
            Mentor</h2>
          <h1 class="title-font text-lg font-medium text-white mb-3">Prof. (Dr.) Sandeep Mathur</h1>
          <p class="show-toggle" x-data="{ show: false, maxLength: 220, text: '', content: '' }"
            x-init="text = $el.firstElementChild.textContent.trim(); content = text.slice(0, maxLength)">
            <span x-text="show ? text : content">A dynamic and energetic individual having 19+ years of experience with
              multiple skill sets. Published many Research papers in various reputed Scopus/SCI indexed journals.
              Contributed to different academics team. Specialties in: Data analytics Research Campus recruitment IT
              recruitments and talent acquisition Higher Education Corporate Training Entrepreneurship Mentor.</span>
            <button class="show-toggle-btn text-purple-600" @click="show = !show" x-show="text.length > maxLength"
              x-text="show ? 'show less' : '..read more'"></button>
          </p>
        </div>
      </div>
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
      <div class="m-4 md:w-1/3 h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
    </div>

  </section>
</body>

</html>
<?php include 'footer.php'; ?>