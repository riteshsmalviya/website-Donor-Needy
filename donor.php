<?php
    $insert = false;
    if(isset($_POST['name'])){
        // Set connection variables
        $server = "sql202.epizy.com";
        $username = "epiz_28522411";
        $password = "Qp1G5a2Uwaz";
        $database = "epiz_28522411_covid";
    
        // Create a database connection
        $con = mysqli_connect($server, $username, $password, $database);
    
        // Check for connection success
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        // echo "Success connecting to the db";
    
        // Collect post variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $resource = $_POST['resource'];
        $locality = $_POST['locality'];
        
        $sql = "INSERT INTO `epiz_28522411_covid`.`covid` (`name`, `email`, `phone`, `resource`, `locality`) VALUES ('$name', '$email', '$phone', '$resource', '$locality');";


        if($con->query($sql) == true){
            // echo "Successfully inserted";
    
            // Flag for successful insertion
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    
        // Close the database connection
        $con->close();
    }
    ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title>Donor & Needy</title>
</head>

<body>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-gray-700 bg-purple-600 bg-opacity-25">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <span><img src="logo.png" alt="" class="rounded-full" width="70" height="70"></span>

                <span>
                    <h1 class="text-3xl">Donor & Needy</h1>
                </span>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600  dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="index.php">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#">Donor</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="needy.php">Needy</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="about.php">About Us </a>

            </nav>
        </div>
    </div>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Donor</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Please fill relevant details, so that the person who needs your immediate help can contact you as early as possible</p>
          </div>
          <form action="donor.php" method="post" name="myForm" onsubmit="return validateForm()">
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required><b><span class="formerror"></span></b>
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email (optional)</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><b><span class="formerror"></span></b>
                </div>
              </div>
              <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">Contact Number</label>
                    <input type="text" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required><b><span class="formerror"></span></b>
                  </div>
                </div>
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="email" class="leading-7 text-sm text-gray-600">Resource</label>
                    <select  id="resource" name="resource" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        <option>Select resource you want to donote</option>
            <option value="covid_bed">COVID BED</option>
            <option value="oxygen_bed">OXYGEN BED</option>
            <option value="icu_bed">ICU BED</option>
            <option value="ventilator_bed">VENTILATOR BED</option>
            <option value="cylinder_oxygen">OXYGEN CYLINDER</option>
            <option value="refill_oxygen">REFILL OXYGEN CYLINDER</option>
            <option value="portable_oxygen">PORTABLE OXYGEN</option>
            <option value="donor_plasma">PLASMA DONOR</option>
            <option value="supply_medicine">MEDICINE</option>
            <option value="doctor">DOCTOR</option>
            <option value="ambulance">AMBULANCE</option>
         </select>
                  </div>
                </div>
                
                
                <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Locality</label>
                      <select id="locality" name="locality" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        <option>Select your locality</option>
                        <option value=" Adilabad
                        "> Adilabad
                                           </option>
                                           <option value=" Agra
                        "> Agra
                                           </option>
                                           <option value=" Ahmedabad
                        "> Ahmedabad
                                           </option>
                                           <option value=" Ahmednagar
                        "> Ahmednagar
                                           </option>
                                           <option value=" Aizawl
                        "> Aizawl
                                           </option>
                                           <option value=" Ajitgarh (Mohali)
                        "> Ajitgarh (Mohali)
                                           </option>
                                           <option value=" Ajmer
                        "> Ajmer
                                           </option>
                                           <option value=" Akola
                        "> Akola
                                           </option>
                                           <option value=" Alappuzha
                        "> Alappuzha
                                           </option>
                                           <option value=" Aligarh
                        "> Aligarh
                                           </option>
                                           <option value=" Alirajpur
                        "> Alirajpur
                                           </option>
                                           <option value=" Allahabad
                        "> Allahabad
                                           </option>
                                           <option value=" Almora
                        "> Almora
                                           </option>
                                           <option value=" Alwar
                        "> Alwar
                                           </option>
                                           <option value=" Ambala
                        "> Ambala
                                           </option>
                                           <option value=" Ambedkar Nagar
                        "> Ambedkar Nagar
                                           </option>
                                           <option value=" Amravati
                        "> Amravati
                                           </option>
                                           <option value=" Amreli district
                        "> Amreli district
                                           </option>
                                           <option value=" Amritsar
                        "> Amritsar
                                           </option>
                                           <option value=" Anand
                        "> Anand
                                           </option>
                                           <option value=" Anantapur
                        "> Anantapur
                                           </option>
                                           <option value=" Anantnag
                        "> Anantnag
                                           </option>
                                           <option value=" Angul
                        "> Angul
                                           </option>
                                           <option value=" Anjaw
                        "> Anjaw
                                           </option>
                                           <option value=" Anuppur
                        "> Anuppur
                                           </option>
                                           <option value=" Araria
                        "> Araria
                                           </option>
                                           <option value=" Ariyalur
                        "> Ariyalur
                                           </option>
                                           <option value=" Arwal
                        "> Arwal
                                           </option>
                                           <option value=" Ashok Nagar
                        "> Ashok Nagar
                                           </option>
                                           <option value=" Auraiya
                        "> Auraiya
                                           </option>
                                           <option value=" Aurangabad
                        "> Aurangabad
                                           </option>
                                           <option value=" Aurangabad
                        "> Aurangabad
                                           </option>
                                           <option value=" Azamgarh
                        "> Azamgarh
                                           </option>
                                           <option value=" Badgam
                        "> Badgam
                                           </option>
                                           <option value=" Bagalkot
                        "> Bagalkot
                                           </option>
                                           <option value=" Bageshwar
                        "> Bageshwar
                                           </option>
                                           <option value=" Bagpat
                        "> Bagpat
                                           </option>
                                           <option value=" Bahraich
                        "> Bahraich
                                           </option>
                                           <option value=" Baksa
                        "> Baksa
                                           </option>
                                           <option value=" Balaghat
                        "> Balaghat
                                           </option>
                                           <option value=" Balangir
                        "> Balangir
                                           </option>
                                           <option value=" Balasore
                        "> Balasore
                                           </option>
                                           <option value=" Ballia
                        "> Ballia
                                           </option>
                                           <option value=" Balrampur
                        "> Balrampur
                                           </option>
                                           <option value=" Banaskantha
                        "> Banaskantha
                                           </option>
                                           <option value=" Banda
                        "> Banda
                                           </option>
                                           <option value=" Bandipora
                        "> Bandipora
                                           </option>
                                           <option value=" Bangalore Rural
                        "> Bangalore Rural
                                           </option>
                                           <option value=" Bangalore Urban
                        "> Bangalore Urban
                                           </option>
                                           <option value=" Banka
                        "> Banka
                                           </option>
                                           <option value=" Bankura
                        "> Bankura
                                           </option>
                                           <option value=" Banswara
                        "> Banswara
                                           </option>
                                           <option value=" Barabanki
                        "> Barabanki
                                           </option>
                                           <option value=" Baramulla
                        "> Baramulla
                                           </option>
                                           <option value=" Baran
                        "> Baran
                                           </option>
                                           <option value=" Bardhaman
                        "> Bardhaman
                                           </option>
                                           <option value=" Bareilly
                        "> Bareilly
                                           </option>
                                           <option value=" Bargarh (Baragarh)
                        "> Bargarh (Baragarh)
                                           </option>
                                           <option value=" Barmer
                        "> Barmer
                                           </option>
                                           <option value=" Barnala
                        "> Barnala
                                           </option>
                                           <option value=" Barpeta
                        "> Barpeta
                                           </option>
                                           <option value=" Barwani
                        "> Barwani
                                           </option>
                                           <option value=" Bastar
                        "> Bastar
                                           </option>
                                           <option value=" Basti
                        "> Basti
                                           </option>
                                           <option value=" Bathinda
                        "> Bathinda
                                           </option>
                                           <option value=" Beed
                        "> Beed
                                           </option>
                                           <option value=" Begusarai
                        "> Begusarai
                                           </option>
                                           <option value=" Belgaum
                        "> Belgaum
                                           </option>
                                           <option value=" Bellary
                        "> Bellary
                                           </option>
                                           <option value=" Betul
                        "> Betul
                                           </option>
                                           <option value=" Bhadrak
                        "> Bhadrak
                                           </option>
                                           <option value=" Bhagalpur
                        "> Bhagalpur
                                           </option>
                                           <option value=" Bhandara
                        "> Bhandara
                                           </option>
                                           <option value=" Bharatpur
                        "> Bharatpur
                                           </option>
                                           <option value=" Bharuch
                        "> Bharuch
                                           </option>
                                           <option value=" Bhavnagar
                        "> Bhavnagar
                                           </option>
                                           <option value=" Bhilwara
                        "> Bhilwara
                                           </option>
                                           <option value=" Bhind
                        "> Bhind
                                           </option>
                                           <option value=" Bhiwani
                        "> Bhiwani
                                           </option>
                                           <option value=" Bhojpur
                        "> Bhojpur
                                           </option>
                                           <option value=" Bhopal
                        "> Bhopal
                                           </option>
                                           <option value=" Bidar
                        "> Bidar
                                           </option>
                                           <option value=" Bijapur
                        "> Bijapur
                                           </option>
                                           <option value=" Bijapur
                        "> Bijapur
                                           </option>
                                           <option value=" Bijnor
                        "> Bijnor
                                           </option>
                                           <option value=" Bikaner
                        "> Bikaner
                                           </option>
                                           <option value=" Bilaspur
                        "> Bilaspur
                                           </option>
                                           <option value=" Bilaspur
                        "> Bilaspur
                                           </option>
                                           <option value=" Birbhum
                        "> Birbhum
                                           </option>
                                           <option value=" Bishnupur
                        "> Bishnupur
                                           </option>
                                           <option value=" Bokaro
                        "> Bokaro
                                           </option>
                                           <option value=" Bongaigaon
                        "> Bongaigaon
                                           </option>
                                           <option value=" Boudh (Bauda)
                        "> Boudh (Bauda)
                                           </option>
                                           <option value=" Budaun
                        "> Budaun
                                           </option>
                                           <option value=" Bulandshahr
                        "> Bulandshahr
                                           </option>
                                           <option value=" Buldhana
                        "> Buldhana
                                           </option>
                                           <option value=" Bundi
                        "> Bundi
                                           </option>
                                           <option value=" Burhanpur
                        "> Burhanpur
                                           </option>
                                           <option value=" Buxar
                        "> Buxar
                                           </option>
                                           <option value=" Cachar
                        "> Cachar
                                           </option>
                                           <option value=" Central Delhi
                        "> Central Delhi
                                           </option>
                                           <option value=" Chamarajnagar
                        "> Chamarajnagar
                                           </option>
                                           <option value=" Chamba
                        "> Chamba
                                           </option>
                                           <option value=" Chamoli
                        "> Chamoli
                                           </option>
                                           <option value=" Champawat
                        "> Champawat
                                           </option>
                                           <option value=" Champhai
                        "> Champhai
                                           </option>
                                           <option value=" Chandauli
                        "> Chandauli
                                           </option>
                                           <option value=" Chandel
                        "> Chandel
                                           </option>
                                           <option value=" Chandigarh
                        "> Chandigarh
                                           </option>
                                           <option value=" Chandrapur
                        "> Chandrapur
                                           </option>
                                           <option value=" Changlang
                        "> Changlang
                                           </option>
                                           <option value=" Chatra
                        "> Chatra
                                           </option>
                                           <option value=" Chennai
                        "> Chennai
                                           </option>
                                           <option value=" Chhatarpur
                        "> Chhatarpur
                                           </option>
                                           <option value=" Chhatrapati Shahuji Maharaj Nagar
                        "> Chhatrapati Shahuji Maharaj Nagar
                                           </option>
                                           <option value=" Chhindwara
                        "> Chhindwara
                                           </option>
                                           <option value=" Chikkaballapur
                        "> Chikkaballapur
                                           </option>
                                           <option value=" Chikkamagaluru
                        "> Chikkamagaluru
                                           </option>
                                           <option value=" Chirang
                        "> Chirang
                                           </option>
                                           <option value=" Chitradurga
                        "> Chitradurga
                                           </option>
                                           <option value=" Chitrakoot
                        "> Chitrakoot
                                           </option>
                                           <option value=" Chittoor
                        "> Chittoor
                                           </option>
                                           <option value=" Chittorgarh
                        "> Chittorgarh
                                           </option>
                                           <option value=" Churachandpur
                        "> Churachandpur
                                           </option>
                                           <option value=" Churu
                        "> Churu
                                           </option>
                                           <option value=" Coimbatore
                        "> Coimbatore
                                           </option>
                                           <option value=" Cooch Behar
                        "> Cooch Behar
                                           </option>
                                           <option value=" Cuddalore
                        "> Cuddalore
                                           </option>
                                           <option value=" Cuttack
                        "> Cuttack
                                           </option>
                                           <option value=" Dadra and Nagar Haveli
                        "> Dadra and Nagar Haveli
                                           </option>
                                           <option value=" Dahod
                        "> Dahod
                                           </option>
                                           <option value=" Dakshin Dinajpur
                        "> Dakshin Dinajpur
                                           </option>
                                           <option value=" Dakshina Kannada
                        "> Dakshina Kannada
                                           </option>
                                           <option value=" Daman
                        "> Daman
                                           </option>
                                           <option value=" Damoh
                        "> Damoh
                                           </option>
                                           <option value=" Dantewada
                        "> Dantewada
                                           </option>
                                           <option value=" Darbhanga
                        "> Darbhanga
                                           </option>
                                           <option value=" Darjeeling
                        "> Darjeeling
                                           </option>
                                           <option value=" Darrang
                        "> Darrang
                                           </option>
                                           <option value=" Datia
                        "> Datia
                                           </option>
                                           <option value=" Dausa
                        "> Dausa
                                           </option>
                                           <option value=" Davanagere
                        "> Davanagere
                                           </option>
                                           <option value=" Debagarh (Deogarh)
                        "> Debagarh (Deogarh)
                                           </option>
                                           <option value=" Dehradun
                        "> Dehradun
                                           </option>
                                           <option value=" Deoghar
                        "> Deoghar
                                           </option>
                                           <option value=" Deoria
                        "> Deoria
                                           </option>
                                           <option value=" Dewas
                        "> Dewas
                                           </option>
                                           <option value=" Dhalai
                        "> Dhalai
                                           </option>
                                           <option value=" Dhamtari
                        "> Dhamtari
                                           </option>
                                           <option value=" Dhanbad
                        "> Dhanbad
                                           </option>
                                           <option value=" Dhar
                        "> Dhar
                                           </option>
                                           <option value=" Dharmapuri
                        "> Dharmapuri
                                           </option>
                                           <option value=" Dharwad
                        "> Dharwad
                                           </option>
                                           <option value=" Dhemaji
                        "> Dhemaji
                                           </option>
                                           <option value=" Dhenkanal
                        "> Dhenkanal
                                           </option>
                                           <option value=" Dholpur
                        "> Dholpur
                                           </option>
                                           <option value=" Dhubri
                        "> Dhubri
                                           </option>
                                           <option value=" Dhule
                        "> Dhule
                                           </option>
                                           <option value=" Dibang Valley
                        "> Dibang Valley
                                           </option>
                                           <option value=" Dibrugarh
                        "> Dibrugarh
                                           </option>
                                           <option value=" Dima Hasao
                        "> Dima Hasao
                                           </option>
                                           <option value=" Dimapur
                        "> Dimapur
                                           </option>
                                           <option value=" Dindigul
                        "> Dindigul
                                           </option>
                                           <option value=" Dindori
                        "> Dindori
                                           </option>
                                           <option value=" Diu
                        "> Diu
                                           </option>
                                           <option value=" Doda
                        "> Doda
                                           </option>
                                           <option value=" Dumka
                        "> Dumka
                                           </option>
                                           <option value=" Dungapur
                        "> Dungapur
                                           </option>
                                           <option value=" Durg
                        "> Durg
                                           </option>
                                           <option value=" East Champaran
                        "> East Champaran
                                           </option>
                                           <option value=" East Delhi
                        "> East Delhi
                                           </option>
                                           <option value=" East Garo Hills
                        "> East Garo Hills
                                           </option>
                                           <option value=" East Khasi Hills
                        "> East Khasi Hills
                                           </option>
                                           <option value=" East Siang
                        "> East Siang
                                           </option>
                                           <option value=" East Sikkim
                        "> East Sikkim
                                           </option>
                                           <option value=" East Singhbhum
                        "> East Singhbhum
                                           </option>
                                           <option value=" Eluru
                        "> Eluru
                                           </option>
                                           <option value=" Ernakulam
                        "> Ernakulam
                                           </option>
                                           <option value=" Erode
                        "> Erode
                                           </option>
                                           <option value=" Etah
                        "> Etah
                                           </option>
                                           <option value=" Etawah
                        "> Etawah
                                           </option>
                                           <option value=" Faizabad
                        "> Faizabad
                                           </option>
                                           <option value=" Faridabad
                        "> Faridabad
                                           </option>
                                           <option value=" Faridkot
                        "> Faridkot
                                           </option>
                                           <option value=" Farrukhabad
                        "> Farrukhabad
                                           </option>
                                           <option value=" Fatehabad
                        "> Fatehabad
                                           </option>
                                           <option value=" Fatehgarh Sahib
                        "> Fatehgarh Sahib
                                           </option>
                                           <option value=" Fatehpur
                        "> Fatehpur
                                           </option>
                                           <option value=" Fazilka
                        "> Fazilka
                                           </option>
                                           <option value=" Firozabad
                        "> Firozabad
                                           </option>
                                           <option value=" Firozpur
                        "> Firozpur
                                           </option>
                                           <option value=" Gadag
                        "> Gadag
                                           </option>
                                           <option value=" Gadchiroli
                        "> Gadchiroli
                                           </option>
                                           <option value=" Gajapati
                        "> Gajapati
                                           </option>
                                           <option value=" Ganderbal
                        "> Ganderbal
                                           </option>
                                           <option value=" Gandhinagar
                        "> Gandhinagar
                                           </option>
                                           <option value=" Ganganagar
                        "> Ganganagar
                                           </option>
                                           <option value=" Ganjam
                        "> Ganjam
                                           </option>
                                           <option value=" Garhwa
                        "> Garhwa
                                           </option>
                                           <option value=" Gautam Buddh Nagar
                        "> Gautam Buddh Nagar
                                           </option>
                                           <option value=" Gaya
                        "> Gaya
                                           </option>
                                           <option value=" Ghaziabad
                        "> Ghaziabad
                                           </option>
                                           <option value=" Ghazipur
                        "> Ghazipur
                                           </option>
                                           <option value=" Giridih
                        "> Giridih
                                           </option>
                                           <option value=" Goalpara
                        "> Goalpara
                                           </option>
                                           <option value=" Godda
                        "> Godda
                                           </option>
                                           <option value=" Golaghat
                        "> Golaghat
                                           </option>
                                           <option value=" Gonda
                        "> Gonda
                                           </option>
                                           <option value=" Gondia
                        "> Gondia
                                           </option>
                                           <option value=" Gopalganj
                        "> Gopalganj
                                           </option>
                                           <option value=" Gorakhpur
                        "> Gorakhpur
                                           </option>
                                           <option value=" Gulbarga
                        "> Gulbarga
                                           </option>
                                           <option value=" Gumla
                        "> Gumla
                                           </option>
                                           <option value=" Guna
                        "> Guna
                                           </option>
                                           <option value=" Guntur
                        "> Guntur
                                           </option>
                                           <option value=" Gurdaspur
                        "> Gurdaspur
                                           </option>
                                           <option value=" Gurgaon
                        "> Gurgaon
                                           </option>
                                           <option value=" Gwalior
                        "> Gwalior
                                           </option>
                                           <option value=" Hailakandi
                        "> Hailakandi
                                           </option>
                                           <option value=" Hamirpur
                        "> Hamirpur
                                           </option>
                                           <option value=" Hamirpur
                        "> Hamirpur
                                           </option>
                                           <option value=" Hanumangarh
                        "> Hanumangarh
                                           </option>
                                           <option value=" Harda
                        "> Harda
                                           </option>
                                           <option value=" Hardoi
                        "> Hardoi
                                           </option>
                                           <option value=" Haridwar
                        "> Haridwar
                                           </option>
                                           <option value=" Hassan
                        "> Hassan
                                           </option>
                                           <option value=" Haveri district
                        "> Haveri district
                                           </option>
                                           <option value=" Hazaribag
                        "> Hazaribag
                                           </option>
                                           <option value=" Hingoli
                        "> Hingoli
                                           </option>
                                           <option value=" Hissar
                        "> Hissar
                                           </option>
                                           <option value=" Hooghly
                        "> Hooghly
                                           </option>
                                           <option value=" Hoshangabad
                        "> Hoshangabad
                                           </option>
                                           <option value=" Hoshiarpur
                        "> Hoshiarpur
                                           </option>
                                           <option value=" Howrah
                        "> Howrah
                                           </option>
                                           <option value=" Hyderabad
                        "> Hyderabad
                                           </option>
                                           <option value=" Hyderabad
                        "> Hyderabad
                                           </option>
                                           <option value=" Idukki
                        "> Idukki
                                           </option>
                                           <option value=" Imphal East
                        "> Imphal East
                                           </option>
                                           <option value=" Imphal West
                        "> Imphal West
                                           </option>
                                           <option value=" Indore
                        "> Indore
                                           </option>
                                           <option value=" Jabalpur
                        "> Jabalpur
                                           </option>
                                           <option value=" Jagatsinghpur
                        "> Jagatsinghpur
                                           </option>
                                           <option value=" Jaintia Hills
                        "> Jaintia Hills
                                           </option>
                                           <option value=" Jaipur
                        "> Jaipur
                                           </option>
                                           <option value=" Jaisalmer
                        "> Jaisalmer
                                           </option>
                                           <option value=" Jajpur
                        "> Jajpur
                                           </option>
                                           <option value=" Jalandhar
                        "> Jalandhar
                                           </option>
                                           <option value=" Jalaun
                        "> Jalaun
                                           </option>
                                           <option value=" Jalgaon
                        "> Jalgaon
                                           </option>
                                           <option value=" Jalna
                        "> Jalna
                                           </option>
                                           <option value=" Jalore
                        "> Jalore
                                           </option>
                                           <option value=" Jalpaiguri
                        "> Jalpaiguri
                                           </option>
                                           <option value=" Jammu
                        "> Jammu
                                           </option>
                                           <option value=" Jamnagar
                        "> Jamnagar
                                           </option>
                                           <option value=" Jamtara
                        "> Jamtara
                                           </option>
                                           <option value=" Jamui
                        "> Jamui
                                           </option>
                                           <option value=" Janjgir-Champa
                        "> Janjgir-Champa
                                           </option>
                                           <option value=" Jashpur
                        "> Jashpur
                                           </option>
                                           <option value=" Jaunpur district
                        "> Jaunpur district
                                           </option>
                                           <option value=" Jehanabad
                        "> Jehanabad
                                           </option>
                                           <option value=" Jhabua
                        "> Jhabua
                                           </option>
                                           <option value=" Jhajjar
                        "> Jhajjar
                                           </option>
                                           <option value=" Jhalawar
                        "> Jhalawar
                                           </option>
                                           <option value=" Jhansi
                        "> Jhansi
                                           </option>
                                           <option value=" Jharsuguda
                        "> Jharsuguda
                                           </option>
                                           <option value=" Jhunjhunu
                        "> Jhunjhunu
                                           </option>
                                           <option value=" Jind
                        "> Jind
                                           </option>
                                           <option value=" Jodhpur
                        "> Jodhpur
                                           </option>
                                           <option value=" Jorhat
                        "> Jorhat
                                           </option>
                                           <option value=" Junagadh
                        "> Junagadh
                                           </option>
                                           <option value=" Jyotiba Phule Nagar
                        "> Jyotiba Phule Nagar
                                           </option>
                                           <option value=" Kabirdham (formerly Kawardha)
                        "> Kabirdham (formerly Kawardha)
                                           </option>
                                           <option value=" Kadapa
                        "> Kadapa
                                           </option>
                                           <option value=" Kaimur
                        "> Kaimur
                                           </option>
                                           <option value=" Kaithal
                        "> Kaithal
                                           </option>
                                           <option value=" Kakinada
                        "> Kakinada
                                           </option>
                                           <option value=" Kalahandi
                        "> Kalahandi
                                           </option>
                                           <option value=" Kamrup
                        "> Kamrup
                                           </option>
                                           <option value=" Kamrup Metropolitan
                        "> Kamrup Metropolitan
                                           </option>
                                           <option value=" Kanchipuram
                        "> Kanchipuram
                                           </option>
                                           <option value=" Kandhamal
                        "> Kandhamal
                                           </option>
                                           <option value=" Kangra
                        "> Kangra
                                           </option>
                                           <option value=" Kanker
                        "> Kanker
                                           </option>
                                           <option value=" Kannauj
                        "> Kannauj
                                           </option>
                                           <option value=" Kannur
                        "> Kannur
                                           </option>
                                           <option value=" Kanpur
                        "> Kanpur
                                           </option>
                                           <option value=" Kanshi Ram Nagar
                        "> Kanshi Ram Nagar
                                           </option>
                                           <option value=" Kanyakumari
                        "> Kanyakumari
                                           </option>
                                           <option value=" Kapurthala
                        "> Kapurthala
                                           </option>
                                           <option value=" Karaikal
                        "> Karaikal
                                           </option>
                                           <option value=" Karauli
                        "> Karauli
                                           </option>
                                           <option value=" Karbi Anglong
                        "> Karbi Anglong
                                           </option>
                                           <option value=" Kargil
                        "> Kargil
                                           </option>
                                           <option value=" Karimganj
                        "> Karimganj
                                           </option>
                                           <option value=" Karimnagar
                        "> Karimnagar
                                           </option>
                                           <option value=" Karnal
                        "> Karnal
                                           </option>
                                           <option value=" Karur
                        "> Karur
                                           </option>
                                           <option value=" Kasaragod
                        "> Kasaragod
                                           </option>
                                           <option value=" Kathua
                        "> Kathua
                                           </option>
                                           <option value=" Katihar
                        "> Katihar
                                           </option>
                                           <option value=" Katni
                        "> Katni
                                           </option>
                                           <option value=" Kaushambi
                        "> Kaushambi
                                           </option>
                                           <option value=" Kendrapara
                        "> Kendrapara
                                           </option>
                                           <option value=" Kendujhar (Keonjhar)
                        "> Kendujhar (Keonjhar)
                                           </option>
                                           <option value=" Khagaria
                        "> Khagaria
                                           </option>
                                           <option value=" Khammam
                        "> Khammam
                                           </option>
                                           <option value=" Khandwa (East Nimar)
                        "> Khandwa (East Nimar)
                                           </option>
                                           <option value=" Khargone (West Nimar)
                        "> Khargone (West Nimar)
                                           </option>
                                           <option value=" Kheda
                        "> Kheda
                                           </option>
                                           <option value=" Khordha
                        "> Khordha
                                           </option>
                                           <option value=" Khowai
                        "> Khowai
                                           </option>
                                           <option value=" Khunti
                        "> Khunti
                                           </option>
                                           <option value=" Kinnaur
                        "> Kinnaur
                                           </option>
                                           <option value=" Kishanganj
                        "> Kishanganj
                                           </option>
                                           <option value=" Kishtwar
                        "> Kishtwar
                                           </option>
                                           <option value=" Kodagu
                        "> Kodagu
                                           </option>
                                           <option value=" Koderma
                        "> Koderma
                                           </option>
                                           <option value=" Kohima
                        "> Kohima
                                           </option>
                                           <option value=" Kokrajhar
                        "> Kokrajhar
                                           </option>
                                           <option value=" Kolar
                        "> Kolar
                                           </option>
                                           <option value=" Kolasib
                        "> Kolasib
                                           </option>
                                           <option value=" Kolhapur
                        "> Kolhapur
                                           </option>
                                           <option value=" Kolkata
                        "> Kolkata
                                           </option>
                                           <option value=" Kollam
                        "> Kollam
                                           </option>
                                           <option value=" Koppal
                        "> Koppal
                                           </option>
                                           <option value=" Koraput
                        "> Koraput
                                           </option>
                                           <option value=" Korba
                        "> Korba
                                           </option>
                                           <option value=" Koriya
                        "> Koriya
                                           </option>
                                           <option value=" Kota
                        "> Kota
                                           </option>
                                           <option value=" Kottayam
                        "> Kottayam
                                           </option>
                                           <option value=" Kozhikode
                        "> Kozhikode
                                           </option>
                                           <option value=" Krishna
                        "> Krishna
                                           </option>
                                           <option value=" Kulgam
                        "> Kulgam
                                           </option>
                                           <option value=" Kullu
                        "> Kullu
                                           </option>
                                           <option value=" Kupwara
                        "> Kupwara
                                           </option>
                                           <option value=" Kurnool
                        "> Kurnool
                                           </option>
                                           <option value=" Kurukshetra
                        "> Kurukshetra
                                           </option>
                                           <option value=" Kurung Kumey
                        "> Kurung Kumey
                                           </option>
                                           <option value=" Kushinagar
                        "> Kushinagar
                                           </option>
                                           <option value=" Kutch
                        "> Kutch
                                           </option>
                                           <option value=" Lahaul and Spiti
                        "> Lahaul and Spiti
                                           </option>
                                           <option value=" Lakhimpur
                        "> Lakhimpur
                                           </option>
                                           <option value=" Lakhimpur Kheri
                        "> Lakhimpur Kheri
                                           </option>
                                           <option value=" Lakhisarai
                        "> Lakhisarai
                                           </option>
                                           <option value=" Lalitpur
                        "> Lalitpur
                                           </option>
                                           <option value=" Latehar
                        "> Latehar
                                           </option>
                                           <option value=" Latur
                        "> Latur
                                           </option>
                                           <option value=" Lawngtlai
                        "> Lawngtlai
                                           </option>
                                           <option value=" Leh
                        "> Leh
                                           </option>
                                           <option value=" Lohardaga
                        "> Lohardaga
                                           </option>
                                           <option value=" Lohit
                        "> Lohit
                                           </option>
                                           <option value=" Lower Dibang Valley
                        "> Lower Dibang Valley
                                           </option>
                                           <option value=" Lower Subansiri
                        "> Lower Subansiri
                                           </option>
                                           <option value=" Lucknow
                        "> Lucknow
                                           </option>
                                           <option value=" Ludhiana
                        "> Ludhiana
                                           </option>
                                           <option value=" Lunglei
                        "> Lunglei
                                           </option>
                                           <option value=" Madhepura
                        "> Madhepura
                                           </option>
                                           <option value=" Madhubani
                        "> Madhubani
                                           </option>
                                           <option value=" Madurai
                        "> Madurai
                                           </option>
                                           <option value=" Mahamaya Nagar
                        "> Mahamaya Nagar
                                           </option>
                                           <option value=" Maharajganj
                        "> Maharajganj
                                           </option>
                                           <option value=" Mahasamund
                        "> Mahasamund
                                           </option>
                                           <option value=" Mahbubnagar
                        "> Mahbubnagar
                                           </option>
                                           <option value=" Mahe
                        "> Mahe
                                           </option>
                                           <option value=" Mahendragarh
                        "> Mahendragarh
                                           </option>
                                           <option value=" Mahoba
                        "> Mahoba
                                           </option>
                                           <option value=" Mainpuri
                        "> Mainpuri
                                           </option>
                                           <option value=" Malappuram
                        "> Malappuram
                                           </option>
                                           <option value=" Maldah
                        "> Maldah
                                           </option>
                                           <option value=" Malkangiri
                        "> Malkangiri
                                           </option>
                                           <option value=" Mamit
                        "> Mamit
                                           </option>
                                           <option value=" Mandi
                        "> Mandi
                                           </option>
                                           <option value=" Mandla
                        "> Mandla
                                           </option>
                                           <option value=" Mandsaur
                        "> Mandsaur
                                           </option>
                                           <option value=" Mandya
                        "> Mandya
                                           </option>
                                           <option value=" Mansa
                        "> Mansa
                                           </option>
                                           <option value=" Marigaon
                        "> Marigaon
                                           </option>
                                           <option value=" Mathura
                        "> Mathura
                                           </option>
                                           <option value=" Mau
                        "> Mau
                                           </option>
                                           <option value=" Mayurbhanj
                        "> Mayurbhanj
                                           </option>
                                           <option value=" Medak
                        "> Medak
                                           </option>
                                           <option value=" Meerut
                        "> Meerut
                                           </option>
                                           <option value=" Mehsana
                        "> Mehsana
                                           </option>
                                           <option value=" Mewat
                        "> Mewat
                                           </option>
                                           <option value=" Mirzapur
                        "> Mirzapur
                                           </option>
                                           <option value=" Moga
                        "> Moga
                                           </option>
                                           <option value=" Mokokchung
                        "> Mokokchung
                                           </option>
                                           <option value=" Mon
                        "> Mon
                                           </option>
                                           <option value=" Moradabad
                        "> Moradabad
                                           </option>
                                           <option value=" Morena
                        "> Morena
                                           </option>
                                           <option value=" Mumbai City
                        "> Mumbai City
                                           </option>
                                           <option value=" Mumbai suburban
                        "> Mumbai suburban
                                           </option>
                                           <option value=" Munger
                        "> Munger
                                           </option>
                                           <option value=" Murshidabad
                        "> Murshidabad
                                           </option>
                                           <option value=" Muzaffarnagar
                        "> Muzaffarnagar
                                           </option>
                                           <option value=" Muzaffarpur
                        "> Muzaffarpur
                                           </option>
                                           <option value=" Mysore
                        "> Mysore
                                           </option>
                                           <option value=" Nabarangpur
                        "> Nabarangpur
                                           </option>
                                           <option value=" Nadia
                        "> Nadia
                                           </option>
                                           <option value=" Nagaon
                        "> Nagaon
                                           </option>
                                           <option value=" Nagapattinam
                        "> Nagapattinam
                                           </option>
                                           <option value=" Nagaur
                        "> Nagaur
                                           </option>
                                           <option value=" Nagpur
                        "> Nagpur
                                           </option>
                                           <option value=" Nainital
                        "> Nainital
                                           </option>
                                           <option value=" Nalanda
                        "> Nalanda
                                           </option>
                                           <option value=" Nalbari
                        "> Nalbari
                                           </option>
                                           <option value=" Nalgonda
                        "> Nalgonda
                                           </option>
                                           <option value=" Namakkal
                        "> Namakkal
                                           </option>
                                           <option value=" Nanded
                        "> Nanded
                                           </option>
                                           <option value=" Nandurbar
                        "> Nandurbar
                                           </option>
                                           <option value=" Narayanpur
                        "> Narayanpur
                                           </option>
                                           <option value=" Narmada
                        "> Narmada
                                           </option>
                                           <option value=" Narsinghpur
                        "> Narsinghpur
                                           </option>
                                           <option value=" Nashik
                        "> Nashik
                                           </option>
                                           <option value=" Navsari
                        "> Navsari
                                           </option>
                                           <option value=" Nawada
                        "> Nawada
                                           </option>
                                           <option value=" Nawanshahr
                        "> Nawanshahr
                                           </option>
                                           <option value=" Nayagarh
                        "> Nayagarh
                                           </option>
                                           <option value=" Neemuch
                        "> Neemuch
                                           </option>
                                           <option value=" Nellore
                        "> Nellore
                                           </option>
                                           <option value=" New Delhi
                        "> New Delhi
                                           </option>
                                           <option value=" Nilgiris
                        "> Nilgiris
                                           </option>
                                           <option value=" Nizamabad
                        "> Nizamabad
                                           </option>
                                           <option value=" North 24 Parganas
                        "> North 24 Parganas
                                           </option>
                                           <option value=" North Delhi
                        "> North Delhi
                                           </option>
                                           <option value=" North East Delhi
                        "> North East Delhi
                                           </option>
                                           <option value=" North Goa
                        "> North Goa
                                           </option>
                                           <option value=" North Sikkim
                        "> North Sikkim
                                           </option>
                                           <option value=" North Tripura
                        "> North Tripura
                                           </option>
                                           <option value=" North West Delhi
                        "> North West Delhi
                                           </option>
                                           <option value=" Nuapada
                        "> Nuapada
                                           </option>
                                           <option value=" Ongole
                        "> Ongole
                                           </option>
                                           <option value=" Osmanabad
                        "> Osmanabad
                                           </option>
                                           <option value=" Pakur
                        "> Pakur
                                           </option>
                                           <option value=" Palakkad
                        "> Palakkad
                                           </option>
                                           <option value=" Palamu
                        "> Palamu
                                           </option>
                                           <option value=" Pali
                        "> Pali
                                           </option>
                                           <option value=" Palwal
                        "> Palwal
                                           </option>
                                           <option value=" Panchkula
                        "> Panchkula
                                           </option>
                                           <option value=" Panchmahal
                        "> Panchmahal
                                           </option>
                                           <option value=" Panchsheel Nagar district (Hapur)
                        "> Panchsheel Nagar district (Hapur)
                                           </option>
                                           <option value=" Panipat
                        "> Panipat
                                           </option>
                                           <option value=" Panna
                        "> Panna
                                           </option>
                                           <option value=" Papum Pare
                        "> Papum Pare
                                           </option>
                                           <option value=" Parbhani
                        "> Parbhani
                                           </option>
                                           <option value=" Paschim Medinipur
                        "> Paschim Medinipur
                                           </option>
                                           <option value=" Patan
                        "> Patan
                                           </option>
                                           <option value=" Pathanamthitta
                        "> Pathanamthitta
                                           </option>
                                           <option value=" Pathankot
                        "> Pathankot
                                           </option>
                                           <option value=" Patiala
                        "> Patiala
                                           </option>
                                           <option value=" Patna
                        "> Patna
                                           </option>
                                           <option value=" Pauri Garhwal
                        "> Pauri Garhwal
                                           </option>
                                           <option value=" Perambalur
                        "> Perambalur
                                           </option>
                                           <option value=" Phek
                        "> Phek
                                           </option>
                                           <option value=" Pilibhit
                        "> Pilibhit
                                           </option>
                                           <option value=" Pithoragarh
                        "> Pithoragarh
                                           </option>
                                           <option value=" Pondicherry
                        "> Pondicherry
                                           </option>
                                           <option value=" Poonch
                        "> Poonch
                                           </option>
                                           <option value=" Porbandar
                        "> Porbandar
                                           </option>
                                           <option value=" Pratapgarh
                        "> Pratapgarh
                                           </option>
                                           <option value=" Pratapgarh
                        "> Pratapgarh
                                           </option>
                                           <option value=" Pudukkottai
                        "> Pudukkottai
                                           </option>
                                           <option value=" Pulwama
                        "> Pulwama
                                           </option>
                                           <option value=" Pune
                        "> Pune
                                           </option>
                                           <option value=" Purba Medinipur
                        "> Purba Medinipur
                                           </option>
                                           <option value=" Puri
                        "> Puri
                                           </option>
                                           <option value=" Purnia
                        "> Purnia
                                           </option>
                                           <option value=" Purulia
                        "> Purulia
                                           </option>
                                           <option value=" Raebareli
                        "> Raebareli
                                           </option>
                                           <option value=" Raichur
                        "> Raichur
                                           </option>
                                           <option value=" Raigad
                        "> Raigad
                                           </option>
                                           <option value=" Raigarh
                        "> Raigarh
                                           </option>
                                           <option value=" Raipur
                        "> Raipur
                                           </option>
                                           <option value=" Raisen
                        "> Raisen
                                           </option>
                                           <option value=" Rajauri
                        "> Rajauri
                                           </option>
                                           <option value=" Rajgarh
                        "> Rajgarh
                                           </option>
                                           <option value=" Rajkot
                        "> Rajkot
                                           </option>
                                           <option value=" Rajnandgaon
                        "> Rajnandgaon
                                           </option>
                                           <option value=" Rajsamand
                        "> Rajsamand
                                           </option>
                                           <option value=" Ramabai Nagar (Kanpur Dehat)
                        "> Ramabai Nagar (Kanpur Dehat)
                                           </option>
                                           <option value=" Ramanagara
                        "> Ramanagara
                                           </option>
                                           <option value=" Ramanathapuram
                        "> Ramanathapuram
                                           </option>
                                           <option value=" Ramban
                        "> Ramban
                                           </option>
                                           <option value=" Ramgarh
                        "> Ramgarh
                                           </option>
                                           <option value=" Rampur
                        "> Rampur
                                           </option>
                                           <option value=" Ranchi
                        "> Ranchi
                                           </option>
                                           <option value=" Ratlam
                        "> Ratlam
                                           </option>
                                           <option value=" Ratnagiri
                        "> Ratnagiri
                                           </option>
                                           <option value=" Rayagada
                        "> Rayagada
                                           </option>
                                           <option value=" Reasi
                        "> Reasi
                                           </option>
                                           <option value=" Rewa
                        "> Rewa
                                           </option>
                                           <option value=" Rewari
                        "> Rewari
                                           </option>
                                           <option value=" Ri Bhoi
                        "> Ri Bhoi
                                           </option>
                                           <option value=" Rohtak
                        "> Rohtak
                                           </option>
                                           <option value=" Rohtas
                        "> Rohtas
                                           </option>
                                           <option value=" Rudraprayag
                        "> Rudraprayag
                                           </option>
                                           <option value=" Rupnagar
                        "> Rupnagar
                                           </option>
                                           <option value=" Sabarkantha
                        "> Sabarkantha
                                           </option>
                                           <option value=" Sagar
                        "> Sagar
                                           </option>
                                           <option value=" Saharanpur
                        "> Saharanpur
                                           </option>
                                           <option value=" Saharsa
                        "> Saharsa
                                           </option>
                                           <option value=" Sahibganj
                        "> Sahibganj
                                           </option>
                                           <option value=" Saiha
                        "> Saiha
                                           </option>
                                           <option value=" Salem
                        "> Salem
                                           </option>
                                           <option value=" Samastipur
                        "> Samastipur
                                           </option>
                                           <option value=" Samba
                        "> Samba
                                           </option>
                                           <option value=" Sambalpur
                        "> Sambalpur
                                           </option>
                                           <option value=" Sangli
                        "> Sangli
                                           </option>
                                           <option value=" Sangrur
                        "> Sangrur
                                           </option>
                                           <option value=" Sant Kabir Nagar
                        "> Sant Kabir Nagar
                                           </option>
                                           <option value=" Sant Ravidas Nagar
                        "> Sant Ravidas Nagar
                                           </option>
                                           <option value=" Saran
                        "> Saran
                                           </option>
                                           <option value=" Satara
                        "> Satara
                                           </option>
                                           <option value=" Satna
                        "> Satna
                                           </option>
                                           <option value=" Sawai Madhopur
                        "> Sawai Madhopur
                                           </option>
                                           <option value=" Sehore
                        "> Sehore
                                           </option>
                                           <option value=" Senapati
                        "> Senapati
                                           </option>
                                           <option value=" Seoni
                        "> Seoni
                                           </option>
                                           <option value=" Seraikela Kharsawan
                        "> Seraikela Kharsawan
                                           </option>
                                           <option value=" Serchhip
                        "> Serchhip
                                           </option>
                                           <option value=" Shahdol
                        "> Shahdol
                                           </option>
                                           <option value=" Shahjahanpur
                        "> Shahjahanpur
                                           </option>
                                           <option value=" Shajapur
                        "> Shajapur
                                           </option>
                                           <option value=" Shamli
                        "> Shamli
                                           </option>
                                           <option value=" Sheikhpura
                        "> Sheikhpura
                                           </option>
                                           <option value=" Sheohar
                        "> Sheohar
                                           </option>
                                           <option value=" Sheopur
                        "> Sheopur
                                           </option>
                                           <option value=" Shimla
                        "> Shimla
                                           </option>
                                           <option value=" Shimoga
                        "> Shimoga
                                           </option>
                                           <option value=" Shivpuri
                        "> Shivpuri
                                           </option>
                                           <option value=" Shopian
                        "> Shopian
                                           </option>
                                           <option value=" Shravasti
                        "> Shravasti
                                           </option>
                                           <option value=" Sibsagar
                        "> Sibsagar
                                           </option>
                                           <option value=" Siddharthnagar
                        "> Siddharthnagar
                                           </option>
                                           <option value=" Sidhi
                        "> Sidhi
                                           </option>
                                           <option value=" Sikar
                        "> Sikar
                                           </option>
                                           <option value=" Simdega
                        "> Simdega
                                           </option>
                                           <option value=" Sindhudurg
                        "> Sindhudurg
                                           </option>
                                           <option value=" Singrauli
                        "> Singrauli
                                           </option>
                                           <option value=" Sirmaur
                        "> Sirmaur
                                           </option>
                                           <option value=" Sirohi
                        "> Sirohi
                                           </option>
                                           <option value=" Sirsa
                        "> Sirsa
                                           </option>
                                           <option value=" Sitamarhi
                        "> Sitamarhi
                                           </option>
                                           <option value=" Sitapur
                        "> Sitapur
                                           </option>
                                           <option value=" Sivaganga
                        "> Sivaganga
                                           </option>
                                           <option value=" Siwan
                        "> Siwan
                                           </option>
                                           <option value=" Solan
                        "> Solan
                                           </option>
                                           <option value=" Solapur
                        "> Solapur
                                           </option>
                                           <option value=" Sonbhadra
                        "> Sonbhadra
                                           </option>
                                           <option value=" Sonipat
                        "> Sonipat
                                           </option>
                                           <option value=" Sonitpur
                        "> Sonitpur
                                           </option>
                                           <option value=" South 24 Parganas
                        "> South 24 Parganas
                                           </option>
                                           <option value=" South Delhi
                        "> South Delhi
                                           </option>
                                           <option value=" South Garo Hills
                        "> South Garo Hills
                                           </option>
                                           <option value=" South Goa
                        "> South Goa
                                           </option>
                                           <option value=" South Sikkim
                        "> South Sikkim
                                           </option>
                                           <option value=" South Tripura
                        "> South Tripura
                                           </option>
                                           <option value=" South West Delhi
                        "> South West Delhi
                                           </option>
                                           <option value=" Sri Muktsar Sahib
                        "> Sri Muktsar Sahib
                                           </option>
                                           <option value=" Srikakulam
                        "> Srikakulam
                                           </option>
                                           <option value=" Srinagar
                        "> Srinagar
                                           </option>
                                           <option value=" Subarnapur (Sonepur)
                        "> Subarnapur (Sonepur)
                                           </option>
                                           <option value=" Sultanpur
                        "> Sultanpur
                                           </option>
                                           <option value=" Sundergarh
                        "> Sundergarh
                                           </option>
                                           <option value=" Supaul
                        "> Supaul
                                           </option>
                                           <option value=" Surat
                        "> Surat
                                           </option>
                                           <option value=" Surendranagar
                        "> Surendranagar
                                           </option>
                                           <option value=" Surguja
                        "> Surguja
                                           </option>
                                           <option value=" Tamenglong
                        "> Tamenglong
                                           </option>
                                           <option value=" Tarn Taran
                        "> Tarn Taran
                                           </option>
                                           <option value=" Tawang
                        "> Tawang
                                           </option>
                                           <option value=" Tehri Garhwal
                        "> Tehri Garhwal
                                           </option>
                                           <option value=" Thane
                        "> Thane
                                           </option>
                                           <option value=" Thanjavur
                        "> Thanjavur
                                           </option>
                                           <option value=" The Dangs
                        "> The Dangs
                                           </option>
                                           <option value=" Theni
                        "> Theni
                                           </option>
                                           <option value=" Thiruvananthapuram
                        "> Thiruvananthapuram
                                           </option>
                                           <option value=" Thoothukudi
                        "> Thoothukudi
                                           </option>
                                           <option value=" Thoubal
                        "> Thoubal
                                           </option>
                                           <option value=" Thrissur
                        "> Thrissur
                                           </option>
                                           <option value=" Tikamgarh
                        "> Tikamgarh
                                           </option>
                                           <option value=" Tinsukia
                        "> Tinsukia
                                           </option>
                                           <option value=" Tirap
                        "> Tirap
                                           </option>
                                           <option value=" Tiruchirappalli
                        "> Tiruchirappalli
                                           </option>
                                           <option value=" Tirunelveli
                        "> Tirunelveli
                                           </option>
                                           <option value=" Tirupur
                        "> Tirupur
                                           </option>
                                           <option value=" Tiruvallur
                        "> Tiruvallur
                                           </option>
                                           <option value=" Tiruvannamalai
                        "> Tiruvannamalai
                                           </option>
                                           <option value=" Tiruvarur
                        "> Tiruvarur
                                           </option>
                                           <option value=" Tonk
                        "> Tonk
                                           </option>
                                           <option value=" Tuensang
                        "> Tuensang
                                           </option>
                                           <option value=" Tumkur
                        "> Tumkur
                                           </option>
                                           <option value=" Udaipur
                        "> Udaipur
                                           </option>
                                           <option value=" Udalguri
                        "> Udalguri
                                           </option>
                                           <option value=" Udham Singh Nagar
                        "> Udham Singh Nagar
                                           </option>
                                           <option value=" Udhampur
                        "> Udhampur
                                           </option>
                                           <option value=" Udupi
                        "> Udupi
                                           </option>
                                           <option value=" Ujjain
                        "> Ujjain
                                           </option>
                                           <option value=" Ukhrul
                        "> Ukhrul
                                           </option>
                                           <option value=" Umaria
                        "> Umaria
                                           </option>
                                           <option value=" Una
                        "> Una
                                           </option>
                                           <option value=" Unnao
                        "> Unnao
                                           </option>
                                           <option value=" Upper Siang
                        "> Upper Siang
                                           </option>
                                           <option value=" Upper Subansiri
                        "> Upper Subansiri
                                           </option>
                                           <option value=" Uttar Dinajpur
                        "> Uttar Dinajpur
                                           </option>
                                           <option value=" Uttara Kannada
                        "> Uttara Kannada
                                           </option>
                                           <option value=" Uttarkashi
                        "> Uttarkashi
                                           </option>
                                           <option value=" Vadodara
                        "> Vadodara
                                           </option>
                                           <option value=" Vaishali
                        "> Vaishali
                                           </option>
                                           <option value=" Valsad
                        "> Valsad
                                           </option>
                                           <option value=" Varanasi
                        "> Varanasi
                                           </option>
                                           <option value=" Vellore
                        "> Vellore
                                           </option>
                                           <option value=" Vidisha
                        "> Vidisha
                                           </option>
                                           <option value=" Viluppuram
                        "> Viluppuram
                                           </option>
                                           <option value=" Virudhunagar
                        "> Virudhunagar
                                           </option>
                                           <option value=" Visakhapatnam
                        "> Visakhapatnam
                                           </option>
                                           <option value=" Vizianagaram
                        "> Vizianagaram
                                           </option>
                                           <option value=" Vyara
                        "> Vyara
                                           </option>
                                           <option value=" Warangal
                        "> Warangal
                                           </option>
                                           <option value=" Wardha
                        "> Wardha
                                           </option>
                                           <option value=" Washim
                        "> Washim
                                           </option>
                                           <option value=" Wayanad
                        "> Wayanad
                                           </option>
                                           <option value=" West Champaran
                        "> West Champaran
                                           </option>
                                           <option value=" West Delhi
                        "> West Delhi
                                           </option>
                                           <option value=" West Garo Hills
                        "> West Garo Hills
                                           </option>
                                           <option value=" West Kameng
                        "> West Kameng
                                           </option>
                                           <option value=" West Khasi Hills
                        "> West Khasi Hills
                                           </option>
                                           <option value=" West Siang
                        "> West Siang
                                           </option>
                                           <option value=" West Sikkim
                        "> West Sikkim
                                           </option>
                                           <option value=" West Singhbhum
                        "> West Singhbhum
                                           </option>
                                           <option value=" West Tripura
                       "> West Tripura
                                           </option>
                                           <option value=" Wokha
                       "> Wokha
                                           </option>
                                           <option value=" Yadgir
                       "> Yadgir
                                           </option>
                                           <option value=" Yamuna Nagar
                       "> Yamuna Nagar
                                           </option>
                                           <option value=" Yanam
                       "> Yanam
                                           </option>
                                           <option value=" Yavatmal
                       "> Yavatmal
                                           </option>
                                           <option value=" Zunheboto "> Zunheboto </option>
                     </select>
                    </div>
                  </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Submit</button>
              </div>
              
            </div>
          </div>
        </form>
        </div>
      </section>


    </body>
    <footer class="text-gray-600 body-font">

        <div class="bg-gray-900 bg-opacity-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left ">© 2021 Donor & Needy
    
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500 cursor-pointer hover:text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/sabsealag07/"
                        class="ml-3 text-gray-500 cursor-pointer hover:text-white" target="_blank">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-white">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <script>
        function clearErrors(){
    
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
    
    
    }
    function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
    
    }
    
    function validateForm(){
    var returnval = true;
    clearErrors();
    
    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['myForm']["name"].value;
    
    
    if (name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }
    
    
    
    var phone = document.forms['myForm']["phone"].value;
    if (phone.length != 10){
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }
    
    
    
    
    
    return returnval;
    }
    </script>
    
    </html>