
<!DOCTYPE html>
<html lang="en">
<head>
  

</head>
<body>
    
    

<meta charset="UTF-8">
  
  <style>
   
    body {
      font-family: Tahoma, sans-serif;
      color: black;
      background-color: lightgrey;
    }
  </style>


    <h1>APPLICATION FOR EMPLOYMENT FORM</h1>

    <p>Please complete all sections of this form as appropriate in BLOCK letters and submit.</p>
    <p>All sections of this form must be completed in full and submitted together with attached complete curriculum vitae and copies of certificates and testimonials.</p>

    <h2>1. Vacancy Applied For</h2>

    <p>
        Vacancy/Post: <input type="text" name="vacancy_post"> Vacancy No: <input type="text" name="vacancy_no">
    </p>

    <h2>2. Personal Details of the Applicant</h2>

    <p>
            <p>
            Name: <input type="text" name="surname" onblur="toProperCase(this)">
            First Name: <input type="text" name="first_name" onblur="toProperCase(this)">
            Middle Name: <input type="text" name="middle name" onblur="toProperCase(this)">
            Surname: <input type="text" name="Surname" onblur="toProperCase(this)">
	   <select name="title" id="title" onblur="toProperCase(this)">
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Miss">Miss</option>
            <option value="Ms.">Ms.</option>
            <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option>
            <option value="Rev.">Rev.</option>
            <option value="Eng.">Eng.</option>
        </select>
	

        </p>
       
    <p>
        <label for="date of birth">Date of Birth:</label> <input type="date" id="date of birth" name="date of birth">
        
	ID No: <input type="text" name="id_no" id="id_no"> 

	PIN.NO.: <input type="text" name="pin_no" id="pin_no" oninput="this.value = this.value.toUpperCase()"maxlength="11">
	 
	Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Inter Sex"> Inter Sex
	<input type="radio" name="gender" value="All Gender"> All Gender
    </p>

    <p>
        Nationality: <select name="nationality"> <option value="Kenyan">Kenyan</option> <option value="Non-Kenyan">Non-Kenyan</option></select> 
	
	Ethnicity: <select name="ethnicity">
        <option value="Aweer/Waata">Aweer/Waata</option>
        <option value="Bajuni">Bajuni</option>
        <option value="Borana">Borana</option>
        <option value="Burji">Burji</option>
        <option value="Dahalo">Dahalo</option>
        <option value="Dasenach (Merile)">Dasenach (Merile)</option>
        <option value="Dorobo">Dorobo</option>
        <option value="El Molo">El Molo</option>
        <option value="Embu">Embu</option> <option value="Gabra">Gabra</option>
        <option value="Gosha">Gosha</option>
        <option value="Ilchamus / Njemps">Ilchamus / Njemps</option>
        <option value="Kalenjin">Kalenjin</option>
        <option value="Kamba">Kamba</option>
        <option value="Kenyan Somali">Kenyan Somali</option>
        <option value="Kikuyu">Kikuyu</option>
        <option value="Kisii">Kisii</option>
        <option value="Konso">Konso</option>
        <option value="Kuria">Kuria</option>
        <option value="Luhya">Luhya</option>
        <option value="Luo">Luo</option>
        <option value="Maasai">Maasai</option>
        <option value="Makonde">Makonde</option>
        <option value="Mbeere">Mbeere</option>
        <option value="Meru">Meru</option>
        <option value="Mijikenda">Mijikenda</option>
        <option value="Nubi">Nubi</option>
        <option value="Pokomo">Pokomo</option>
        <option value="Orma">Orma</option>
        <option value="Rendile">Rendile</option>
        <option value="Sakuye">Sakuye</option>
        <option value="Samburu">Samburu</option>
        <option value="Suba">Suba</option>
        <option value="Swahili">Swahili</option>
        <option value="Taita">Taita</option>
        <option value="Taveta">Taveta</option>
        <option value="Teso">Teso</option>
        <option value="Tharaka">Tharaka</option>
        <option value="Turkana">Turkana</option>
        <option value="Walwana/Malakote">Walwana/Malakote</option>
        <option value="Wayyu">Wayyu</option>
        <option value="Kenyan Asians">Kenyan Asians</option>
        <option value="Kenyan American">Kenyan American</option>
        <option value="Kenyan Arabs">Kenyan Arabs</option>
        <option value="Kenyan European">Kenyan European</option>
        <option value="Non Kenyans">Non Kenyans</option>
        <option value="Kenyan So State">Kenyan So State</option>
        <option value="Not Stated">Not Stated</option></select> 
	
	Ethnicity Sub-group: <select name="ethnicity sub-group">
  <option value="Amu">Amu</option>
  <option value="Barawa">Barawa</option>
  <option value="Chitundi">Chitundi</option>
  <option value="Jomvu">Jomvu</option>
  <option value="Munyoyaya/Muyeyaya">Munyoyaya/Muyeyaya</option>
  <option value="Mvita">Mvita</option>
  <option value="Ngare">Ngare</option>
  <option value="Pate">Pate</option>
  <option value="Siu">Siu</option>
  <option value="Vumba">Vumba</option>
  <option value="Wachangamwe">Wachangamwe</option>
  <option value="Wafaza">Wafaza</option>
  <option value="Wakatwa">Wakatwa</option>
  <option value="Wakilifi">Wakilifi</option>
  <option value="Wakilindini">Wakilindini</option>
  <option value="Wamtwapa">Wamtwapa</option>
  <option value="Washaka">Washaka</option>
  <option value="Watangana">Watangana</option>
  <option value="Watikuu">Watikuu</option>
  <option value="Abakhenye">Abakhenye</option>
  <option value="Bakhayo">Bakhayo</option>
  <option value="Banyala">Banyala</option>
  <option value="Banyore">Banyore</option>
  <option value="Batsotso">Batsotso</option>
  <option value="Batura">Batura</option>
  <option value="Bukusu">Bukusu</option>
  <option value="Idakho">Idakho</option>
  <option value="Isukha">Isukha</option>
  <option value="Kabras">Kabras</option>
  <option value="Kisa">Kisa</option>
  <option value="Marachi">Marachi</option>
  <option value="Maragoli">Maragoli</option>
  <option value="Marama">Marama</option>
  <option value="Samia">Samia</option>
  <option value="Tachoni">Tachoni</option>
  <option value="Tiriki">Tiriki</option>
  <option value="Wanga">Wanga</option>
  <option value="Chonyi">Chonyi</option>
  <option value="Digo">Digo</option>
  <option value="Wafundi">Wafundi</option>
  <option value="Wasakwa">Wasakwa</option>
  <option value="Duruma">Duruma</option>
  <option value="Giriama">Giriama</option>
  <option value="Jibana">Jibana</option>
  <option value="Kambe">Kambe</option>
  <option value="Kauma">Kauma</option>
  <option value="Rabai">Rabai</option>
  <option value="Ribe">Ribe</option>
  <option value="Galla">Galla</option>
  <option value="Wardei">Wardei</option>
  <option value="Kikuyu">Kikuyu</option>
  <option value="Kisii">Kisii</option>
  <option value="Konso">Konso</option>
  <option value="Kuria">Kuria</option>
  <option value="Luhya">Luhya</option>
  <option value="Luo">Luo</option>
  <option value="Maasai">Maasai</option>
  <option value="Makonde">Makonde</option>
  <option value="Mbeere">Mbeere</option>
  <option value="Meru">Meru</option>
  <option value="Mijikenda">Mijikenda</option>
  <option value="Nubi">Nubi</option>
  <option value="Pokomo">Pokomo</option>
  <option value="Orma">Orma</option>
  <option value="Rendile">Rendile</option>
  <option value="Sakuye">Sakuye</option>
  <option value="Samburu">Samburu</option>
  <option value="Suba">Suba</option>
  <option value="Swahili">Swahili</option>
  <option value="Taita">Taita</option>
  <option value="Taveta">Taveta</option>
  <option value="Teso">Teso</option>
  <option value="Tharaka">Tharaka</option>
  <option value="Turkana">Turkana</option>
  <option value="Walwana/Malakote">Walwana/Malakote</option>
  <option value="Wayyu">Wayyu</option>
  <option value="Kenyan Asians">Kenyan Asians</option>
  <option value="Kenyan American">Kenyan American</option>
  <option value="Kenyan Arabs">Kenyan Arabs</option>
  <option value="Kenyan European">Kenyan European</option>
  <option value="Non Kenyans">Non Kenyans</option>
  <option value="Kenyan So State">Kenyan So State</option>
  <option value="Not Stated">Not Stated</option>
<option value ="Arror">Arror</option>
<option value ="Cherangany">Cherangany</option>
<option value ="Endo">Endo</option>
<option value ="Endorois">Endorois</option>
<option value ="Keiyo">Keiyo</option>
<option value ="Kipsigis">Kipsigis</option>
<option value ="Lembus">Lembus</option>
<option value ="Marakwet">Marakwet</option>
<option value ="Nandi">Nandi</option>
<option value ="Ogiek">Ogiek</option>
<option value ="Pokot">Pokot</option>
<option value ="Sabaot/Kony/Bong'omek">Sabaot/Kony/Bong'omek</option>
<option value ="Samor">Samor</option>
<option value ="Senger">Senger</option>
<option value ="Sengwer">Sengwer</option>
<option value ="Terik">Terik</option>
<option value ="Tugen">Tugen</option>
<option value ="Kenyan Somali - So Stated">Kenyan Somali - So Stated</option>
<option value ="Ajuran">Ajuran</option>
<option value ="Degodia">Degodia</option>
<option value ="Gurreh">Gurreh</option>
<option value ="Hawiyah">Hawiyah</option>
<option value ="Isaak">Isaak</option>
<option value ="Leysan">Leysan</option>
<option value ="Murule">Murule</option>
<option value ="Ogaden">Ogaden</option>
<option value ="Corner Tribes">Corner Tribes</option>
<option value ="Abakhenye">Abakhenye</option>
<option value ="Bakhayo">Bakhayo</option>
<option value ="Banyala">Banyala</option>
<option value ="Banyore">Banyore</option>
<option value ="Batsotso">Batsotso</option>
<option value ="Batura">Batura</option>
<option value ="Bukusu">Bukusu</option>
<option value ="Idakho">Idakho</option>
<option value ="Isukha">Isukha</option>
<option value ="Kabras">Kabras</option>
<option value ="Kisa">Kisa</option>
<option value ="Marachi">Marachi</option>
<option value ="Maragoli">Maragoli</option>
<option value ="Marama">Marama</option>
<option value ="Samia">Samia</option>
<option value ="Tachoni">Tachoni</option>
<option value ="Tiriki">Tiriki</option>
<option value ="Wanga">Wanga</option>
<option value ="Chonyi">Chonyi</option>
<option value ="Digo/Wafundi/Wasakwa">Digo/Wafundi/Wasakwa</option>
<option value ="Duruma">Duruma</option>
<option value ="Giriama">Giriama</option>
<option value ="Jibana">Jibana</option>
<option value ="Kambe">Kambe</option>
<option value ="Kauma">Kauma</option>
<option value ="Rabai">Rabai</option>
<option value ="Ribe">Ribe</option>
<option value ="Galla">Galla</option>
<option value ="Wardei">Wardei</option>
<option value ="Amu">Amu</option>
<option value ="Barawa">Barawa</option>
<option value ="Chitundi">Chitundi</option>
<option value ="Jomvu">Jomvu</option>
<option value ="Munyoyaya/Muyeyaya">Munyoyaya/Muyeyaya</option>
<option value ="Mvita">Mvita</option>
<option value ="Ngare">Ngare</option>
<option value ="Pate">Pate</option>
<option value ="Siu">Siu</option>
<option value ="Vumba">Vumba</option>
<option value ="Wachangamwe">Wachangamwe</option>
<option value ="Wafaza">Wafaza</option>
<option value ="Wakatwa">Wakatwa</option>
<option value ="Wakilifi">Wakilifi</option>
<option value ="Wakilindini">Wakilindini</option>
<option value ="Wamtwapa">Wamtwapa</option>
<option value ="Washaka">Washaka</option>
<option value ="Watangana">Watangana</option>
<option value ="Watikuu">Watikuu</option>


    </select> Home County: <select id="countySelect">
  <option value="1">Mombasa</option>
  <option value="2">Kwale</option>
  <option value="3">Kilifi</option>
  <option value="4">Tana River</option>
  <option value="5">Lamu</option>
  <option value="6">Taita/Taveta</option>
  <option value="7">Garissa</option>
  <option value="8">Wajir</option>
  <option value="9">Mandera</option>
  <option value="10">Marsabit</option>
  <option value="11">Isiolo</option>
  <option value="12">Meru</option>
  <option value="13">Tharaka-Nithi</option>
  <option value="14">Embu</option>
  <option value="15">Kitui</option>
  <option value="16">Machakos</option>
  <option value="17">Makueni</option>
  <option value="18">Nyandarua</option>
  <option value="19">Nyeri</option>
  <option value="20">Kirinyaga</option>
  <option value="21">Murang'a</option>
  <option value="22">Kiambu</option>
  <option value="23">Turkana</option>
  <option value="24">West Pokot</option>
  <option value="25">Samburu</option>
  <option value="26">Trans Nzoia</option>
  <option value="27">Uasin Gishu</option>
  <option value="28">Elgeyo/Marakwet</option>
  <option value="29">Nandi</option>
  <option value="30">Baringo</option>
  <option value="31">Laikipia</option>
  <option value="32">Nakuru</option>
  <option value="33">Narok</option>
  <option value="34">Kajiado</option>
  <option value="35">Kericho</option>
  <option value="36">Bomet</option>
  <option value="37">Kakamega</option>
  <option value="38">Vihiga</option>
  <option value="39">Bungoma</option>
  <option value="40">Busia</option>
  <option value="41">Siaya</option>
  <option value="42">Kisumu</option>
  <option value="43">Homa Bay</option>
  <option value="44">Migori</option>
  <option value="45">Kisii</option>
  <option value="46">Nyamira</option>
  <option value="47">Nairobi City</option>
</select>
  Sub County: <select id="subCountySelect">
  <option value="Changamwe">Changamwe</option>
  <option value="Jomvu">Jomvu</option>
  <option value="Kisauni">Kisauni</option>
  <option value="Likoni">Likoni</option>
  <option value="Mvita">Mvita</option>
  <option value="Nyali">Nyali</option>
  <option value="Kinango">Kinango</option>
  <option value="Lunga Lunga">Lunga Lunga</option>
  <option value="Matuga">Matuga</option>
  <option value="Msambweni">Msambweni</option>
  <option value="Samburu">Samburu</option>
  <option value="Chonyi">Chonyi</option>
  <option value="Ganze">Ganze</option>
  <option value="Kaloleni">Kaloleni</option>
  <option value="Kauma">Kauma</option>
  <option value="Kilifi North">Kilifi North</option>
  <option value="Kilifi South">Kilifi South</option>
  <option value="Magarini">Magarini</option>
  <option value="Malindi">Malindi</option>
  <option value="Rabai">Rabai</option>
  <option value="Tana Delta">Tana Delta</option>
  <option value="Tana North">Tana North</option>
  <option value="Tana River">Tana River</option>
  <option value="Lamu East">Lamu East</option>
  <option value="Lamu West">Lamu West</option>
  <option value="Mwatate">Mwatate</option>
  <option value="Taita">Taita</option>
  <option value="Taveta">Taveta</option>
  <option value="Voi">Voi</option>
  <option value="Balambala">Balambala</option>
  <option value="Dadaab">Dadaab</option>
  <option value="Fafi">Fafi</option>
  <option value="Garissa">Garissa</option>
  <option value="Hulugho">Hulugho</option>
  <option value="Ijara">Ijara</option>
  <option value="Lagdera">Lagdera</option>
  <option value="Buna">Buna</option>
  <option value="Eldas">Eldas</option>
  <option value="Habaswein">Habaswein</option>
  <option value="Tarbaj">Tarbaj</option>
  <option value="Wajir East">Wajir East</option>
  <option value="Wajir North">Wajir North</option>
  <option value="Wajir South">Wajir South</option>
  <option value="Wajir West">Wajir West</option>
  <option value="Mandera West">Mandera West</option>
  <option value="Banisa">Banisa</option>
  <option value="Kotulo">Kotulo</option>
  <option value="Lafey">Lafey</option>
  <option value="Mandera Central">Mandera Central</option>
  <option value="Mandera East">Mandera East</option>
  <option value="Mandera North">Mandera North</option>
  <option value="Loiyangalani">Loiyangalani</option>
  <option value="Marsabit Central">Marsabit Central</option>
  <option value="Marsabit North">Marsabit North</option>
  <option value="Marsabit South">Marsabit South</option>
  <option value="Moyale">Moyale</option>
  <option value="North Horr">North Horr</option>
  <option value="Sololo">Sololo</option>
  <option value="Garbatulla">Garbatulla</option>
  <option value="Isiolo">Isiolo</option>
  <option value="Merti">Merti</option>
  <option value="Buuri East">Buuri East</option>
  <option value="Buuri West">Buuri West</option>
  <option value="Igembe Central">Igembe Central</option>
  <option value="Igembe North">Igembe North</option>
  <option value="Igembe South">Igembe South</option>
  <option value="Imenti North">Imenti North</option>
  <option value="Imenti South">Imenti South</option>
  <option value="Meru Central">Meru Central</option>
  <option value="Tigania Central">Tigania Central</option>
  <option value="Tigania East">Tigania East</option>
  <option value="Tigania West">Tigania West</option>
  <option value="Igambang'Ombe">Igambang'Ombe</option>
  <option value="Maara">Maara</option>
  <option value="Meru South">Meru South</option>
  <option value="Tharaka North">Tharaka North</option>
  <option value="Tharaka South">Tharaka South</option>
  <option value="Embu East">Embu East</option>
  <option value="Embu North">Embu North</option>
  <option value="Embu West">Embu West</option>
  <option value="Mbeere South">Mbeere South</option>
  <option value="Mbeere North">Mbeere North</option>
  <option value="Ikutha">Ikutha</option>
  <option value="Katulani">Katulani</option>
  <option value="Kisasi">Kisasi</option>
  <option value="Kitui Central">Kitui Central</option>
  <option value="Kitui West">Kitui West</option>
  <option value="Kyuso">Kyuso</option>
  <option value="Lower Yatta">Lower Yatta</option>
  <option value="Matinyani">Matinyani</option>
  <option value="Migwani">Migwani</option>
  <option value="Mumoni">Mumoni</option>
  <option value="Mutitu">Mutitu</option>
  <option value="Mutitu North">Mutitu North</option>
  <option value="Mutomo">Mutomo</option>
  <option value="Mwingi Central">Mwingi Central</option>
  <option value="Mwingi East">Mwingi East</option>
  <option value="Nzambani">Nzambani</option>
  <option value="Thagicu">Thagicu</option>
  <option value="Tseikuru">Tseikuru</option>
  <option value="Athi River">Athi River</option>
  <option value="Kalama">Kalama</option>
  <option value="Kangundo">Kangundo</option>
  <option value="Kathiani">Kathiani</option>
  <option value="Machakos">Machakos</option>
  <option value="Masinga">Masinga</option>
  <option value="Matungulu">Matungulu</option>
  <option value="Mwala">Mwala</option>
  <option value="Yatta">Yatta</option>
  <option value="Kathonzweni">Kathonzweni</option>
  <option value="Kibwezi">Kibwezi</option>
  <option value="Kilungu">Kilungu</option>
  <option value="Makindu">Makindu</option>
  <option value="Makueni">Makueni</option>
  <option value="Mbooni East">Mbooni East</option>
  <option value="Mbooni West">Mbooni West</option>
  <option value="Mukaa">Mukaa</option>
  <option value="Nzaui">Nzaui</option>
  <option value="Kinangop">Kinangop</option>
  <option value="Nyandarua South">Nyandarua South</option>
  <option value="Mirangine">Mirangine</option>
  <option value="Kipipiri">Kipipiri</option>
  <option value="Nyandarua Central">Nyandarua Central</option>
  <option value="Nyandarua West">Nyandarua West</option>
  <option value="Nyandarua North">Nyandarua North</option>
  <option value="Tetu">Tetu</option>
  <option value="Kieni East">Kieni East</option>
  <option value="Kieni West">Kieni West</option>
  <option value="Mathira East">Mathira East</option>
  <option value="Mathira West">Mathira West</option>
  <option value="Nyeri South">Nyeri South</option>
  <option value="Mukurwe-Ini">Mukurwe-Ini</option>
  <option value="Nyeri Central">Nyeri Central</option>
  <option value="Kirinyaga Central">Kirinyaga Central</option>
  <option value="Kirinyaga East">Kirinyaga East</option>
  <option value="Kirinyaga West">Kirinyaga West</option>
  <option value="Mwea East">Mwea East</option>
  <option value="Mwea West">Mwea West</option>
  <option value="Murang'A East">Murang'A East</option>
  <option value="Kangema">Kangema</option>
  <option value="Mathioya">Mathioya</option>
  <option value="Kahuro">Kahuro</option>
  <option value="Murang'A South">Murang'A South</option>
  <option value="Gatanga">Gatanga</option>
  <option value="Kigumo">Kigumo</option>
  <option value="Kandara">Kandara</option>
  <option value="Gatundu North">Gatundu North</option>
  <option value="Gatundu South">Gatundu South</option>
  <option value="Githunguri">Githunguri</option>
  <option value="Juja">Juja</option>
  <option value="Kabete">Kabete</option>
  <option value="Kiambaa">Kiambaa</option>
  <option value="Kiambu">Kiambu</option>
  <option value="Kikuyu">Kikuyu</option>
  <option value="Lari">Lari</option>
  <option value="Limuru">Limuru</option>
  <option value="Ruiru">Ruiru</option>
  <option value="Thika East">Thika East</option>
  <option value="Thika West">Thika West</option>
  <option value="Kibish">Kibish</option>
  <option value="Loima">Loima</option>
  <option value="Turkana Central">Turkana Central</option>
  <option value="Turkana East">Turkana East</option>
  <option value="Turkana North">Turkana North</option>
  <option value="Turkana South">Turkana South</option>
  <option value="Turkana West">Turkana West</option>
  <option value="Kipkomo">Kipkomo</option>
  <option value="Pokot Central">Pokot Central</option>
  <option value="Pokot North">Pokot North</option>
  <option value="Pokot South">Pokot South</option>
  <option value="West Pokot">West Pokot</option>
  <option value="Samburu Central">Samburu Central</option>
  <option value="Samburu East">Samburu East</option>
  <option value="Samburu North">Samburu North</option>
  <option value="Trans Nzoia West">Trans Nzoia West</option>
  <option value="Trans Nzoia East">Trans Nzoia East</option>
  <option value="Kwanza">Kwanza</option>
  <option value="Endebess">Endebess</option>
  <option value="Kiminini">Kiminini</option>
  <option value="Ainabkoi">Ainabkoi</option>
  <option value="Kapseret">Kapseret</option>
  <option value="Kesses">Kesses</option>
  <option value="Moiben">Moiben</option>
  <option value="Soy">Soy</option>
  <option value="Turbo">Turbo</option>
  <option value="Keiyo North">Keiyo North</option>
  <option value="Keiyo South">Keiyo South</option>
  <option value="Marakwet East">Marakwet East</option>
  <option value="Marakwet West">Marakwet West</option>
  <option value="Chesumei">Chesumei</option>
  <option value="Nandi Central">Nandi Central</option>
  <option value="Nandi East">Nandi East</option>
  <option value="Nandi North">Nandi North</option>
  <option value="Nandi South">Nandi South</option>
  <option value="Tinderet">Tinderet</option>
  <option value="Baringo Central">Baringo Central</option>
  <option value="Baringo North">Baringo North</option>
  <option value="East Pokot">East Pokot</option>
  <option value="Koibatek">Koibatek</option>
  <option value="Marigat">Marigat</option>
  <option value="Mogotio">Mogotio</option>
  <option value="Tiaty East">Tiaty East</option>
  <option value="Lake Baringo">Lake Baringo</option>
  <option value="Laikipia Central">Laikipia Central</option>
  <option value="Laikipia East">Laikipia East</option>
  <option value="Laikipia North">Laikipia North</option>
  <option value="Laikipia West">Laikipia West</option>
  <option value="Nyahururu">Nyahururu</option>
  <option value="Gilgil">Gilgil</option>
  <option value="Kuresoi North">Kuresoi North</option>
  <option value="Kuresoi South">Kuresoi South</option>
  <option value="Molo">Molo</option>
  <option value="Naivasha">Naivasha</option>
  <option value="Nakuru East">Nakuru East</option>
  <option value="Nakuru North">Nakuru North</option>
  <option value="Nakuru West">Nakuru West</option>
  <option value="Njoro">Njoro</option>
  <option value="Rongai">Rongai</option>
  <option value="Subukia">Subukia</option>
  <option value="Narok East">Narok East</option>
  <option value="Narok North">Narok North</option>
  <option value="Narok South">Narok South</option>
  <option value="Narok West">Narok West</option>
  <option value="Trans Mara East">Trans Mara East</option>
  <option value="Trans Mara West">Trans Mara West</option>
  <option value="Isinya">Isinya</option>
  <option value="Kajiado Central">Kajiado Central</option>
  <option value="Kajiado North">Kajiado North</option>
  <option value="Kajiado West">Kajiado West</option>
  <option value="Loitokitok">Loitokitok</option>
  <option value="Mashuuru">Mashuuru</option>
  <option value="Belgut">Belgut</option>
  <option value="Bureti">Bureti</option>
  <option value="Kericho East">Kericho East</option>
  <option value="Kipkelion">Kipkelion</option>
  <option value="Londiani">Londiani</option>
  <option value="Soin Sigowet">Soin Sigowet</option>
  <option value="Bomet East">Bomet East</option>
  <option value="Chepalungu">Chepalungu</option>
  <option value="Konoin">Konoin</option>
  <option value="Sotik">Sotik</option>
  <option value="Bomet Central">Bomet Central</option>
  <option value="Butere">Butere</option>
  <option value="Kakamega Central">Kakamega Central</option>
  <option value="Kakamega East">Kakamega East</option>
  <option value="Kakamega North">Kakamega North</option>
  <option value="Kakamega South">Kakamega South</option>
  <option value="Khwisero">Khwisero</option>
  <option value="Likuyani">Likuyani</option>
  <option value="Lugari">Lugari</option>
  <option value="Matete">Matete</option>
  <option value="Matungu">Matungu</option>
  <option value="Mumias East">Mumias East</option>
  <option value="Mumias West">Mumias West</option>
  <option value="Navakholo">Navakholo</option>
  <option value="Emuhaya">Emuhaya</option>
  <option value="Vihiga">Vihiga</option>
  <option value="Sabatia">Sabatia</option>
  <option value="Luanda">Luanda</option>
  <option value="Hamisi">Hamisi</option>
  <option value="Bumula">Bumula</option>
  <option value="Bungoma Central">Bungoma Central</option>
  <option value="Bungoma East">Bungoma East</option>
  <option value="Bungoma North">Bungoma North</option>
  <option value="Bungoma South">Bungoma South</option>
  <option value="Cheptais">Cheptais</option>
  <option value="Kimilili">Kimilili</option>
  <option value="Bungoma West">Bungoma West</option>
  <option value="Tongaren">Tongaren</option>
  <option value="Webuye West">Webuye West</option>
  <option value="Mt Elgon Forest">Mt Elgon Forest</option>
  <option value="Bunyala">Bunyala</option>
  <option value="Busia">Busia</option>
  <option value="Butula">Butula</option>
  <option value="Nambale">Nambale</option>
  <option value="Samia">Samia</option>
  <option value="Teso North">Teso North</option>
  <option value="Teso South">Teso South</option>
  <option value="Siaya">Siaya</option>
  <option value="Gem">Gem</option>
  <option value="Ugenya">Ugenya</option>
  <option value="Ugunja">Ugunja</option>
  <option value="Bondo">Bondo</option>
  <option value="Rarieda">Rarieda</option>
  <option value="Kisumu East">Kisumu East</option>
  <option value="Kisumu Central">Kisumu Central</option>
  <option value="Kisumu West">Kisumu West</option>
  <option value="Seme">Seme</option>
  <option value="Muhoroni">Muhoroni</option>
  <option value="Nyando">Nyando</option>
  <option value="Nyakach">Nyakach</option>
  <option value="Homa Bay">Homa Bay</option>
  <option value="Ndhiwa">Ndhiwa</option>
  <option value="Rachuonyo North">Rachuonyo North</option>
  <option value="Rachuonyo East">Rachuonyo East</option>
  <option value="Rachuonyo South">Rachuonyo South</option>
  <option value="Rangwe">Rangwe</option>
  <option value="Suba North">Suba North</option>
  <option value="Suba South">Suba South</option>
  <option value="Awendo">Awendo</option>
  <option value="Kuria East">Kuria East</option>
  <option value="Kuria West">Kuria West</option>
  <option value="Nyatike">Nyatike</option>
  <option value="Rongo">Rongo</option>
  <option value="Suna East">Suna East</option>
  <option value="Suna West">Suna West</option>
  <option value="Uriri">Uriri</option>
  <option value="Etago">Etago</option>
  <option value="Gucha">Gucha</option>
  <option value="Gucha South">Gucha South</option>
  <option value="Kenyenya">Kenyenya</option>
  <option value="Kisii Central">Kisii Central</option>
  <option value="Kisii South">Kisii South</option>
  <option value="Kitutu Central">Kitutu Central</option>
  <option value="Marani">Marani</option>
  <option value="Masaba South">Masaba South</option>
  <option value="Nyamache">Nyamache</option>
  <option value="Sameta">Sameta</option>
  <option value="Borabu">Borabu</option>
  <option value="Manga">Manga</option>
  <option value="Masaba North">Masaba North</option>
  <option value="Nyamira North">Nyamira North</option>
  <option value="Nyamira South">Nyamira South</option>
  <option value="Dagoretti">Dagoretti</option>
  <option value="Embakasi">Embakasi</option>
  <option value="Kamukunji">Kamukunji</option>
  <option value="Kasarani">Kasarani</option>
  <option value="Kibra">Kibra</option>
  <option value="Lang'Ata">Lang'Ata</option>
  <option value="Makadara">Makadara</option>
  <option value="Mathare">Mathare</option>
  <option value="Njiru">Njiru</option>
  <option value="Starehe">Starehe</option>
  <option value="Westlands">Westlands</option>
</select> 

	<h2>3. Contact Information</h2>
    <p>
        Postal Address: <input type="text" name="postal_address"> Code: <input type="text" name="postal_code"> Town/City: <input type="text" name="town_city">
    </p>

    <p>
        Telephone No: <input type="text" name="telephone_no"> Mobile No: <input type="text" name="mobile_no"> E-mail address: <input type="text" name="email_address">  </p>
	<p> Name of alternative contact person: <input type="text" name="alt_contact_person"> Telephone No: <input type="text" name="alt_contact_telephone"> </p> 
	<p> Are you living with a disability?
        <input type="radio" name="disability" value="Yes"> Yes
        <input type="radio" name="disability" value="No"> No
    </p>

    <p>
        If yes, give;
    </p>

    <p>
        (i) Details of Disability: 
	<select id="disability" name="disability">
        <option value="physical">Physical Disabilities</option>
        <option value="intellectual">Intellectual Disabilities</option>
        <option value="sensory">Sensory Disabilities</option>
        <option value="psychiatric">Psychiatric or Mental Health Disabilities</option>
        <option value="neurological">Neurological Disabilities</option>
        <option value="developmental">Developmental Disabilities</option>
        </select>

	Nature of disability:  
        <select id="disability" name="disability">
        <option value="mobility">Mobility Impairments</option>
        <option value="idd">Intellectual Developmental Disorder (IDD)</option>
        <option value="deafblindness">Deafblindness</option>
        <option value="depression">Depression</option>
        <option value="epilepsy">Epilepsy</option>
        <option value="cerebralpalsy">Cerebral Palsy</option>
        <option value="orthopedic">Orthopedic Disabilities</option>
        <option value="autism">Autism Spectrum Disorders</option>
        <option value="taste_smell">Taste and Smell Disorders</option>
        <option value="anxiety">Anxiety Disorders</option>
        <option value="ms">Multiple Sclerosis (MS)</option>
        <option value="fas">Fetal Alcohol Syndrome (FAS)</option>
        <option value="visual">Visual Impairments</option>
        <option value="learning">Learning Disabilities</option>
        <option value="schizophrenia">Schizophrenia</option>
        <option value="bipolar">Bipolar Disorder</option>
        <option value="parkinsons">Parkinson's Disease</option>
        <option value="hearing">Hearing Impairments</option>
        <option value="intellectual">Intellectual Disabilities</option>
        </select>

    </p>

    <p>
        (ii) Details of Registration with the National Council for People with Disabilities Registration Number: <input type="text" name="disability_registration">
             <label for="registration_date">Registration Date:</label> <input type="date" id="registration_date" name="disability_registration_date">

		
    </p>

   
 <h2>4. Please Attach the Following Documents</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <ol>
            <li>
                <label for="id_copy">Copy of your ID:</label>
                <input type="file" name="id_copy" id="id_copy">
            </li>
		<li>
                <label for="KRA PIN Certificate_copy">Copy of your KRA PIN Certificate:</label>
                <input type="file" name="KRA PIN Certificate_copy" id="KRA PIN Certificate_copy">
            </li>
            <li>
                <label for="school_certificate">Copy of your Secondary School Leaving Certificate:</label>
                <input type="file" name="school_certificate" id="school_certificate">
            </li>
            <li>
                <label for="kcse_copy">Copy of your KCSE (and other academic certificates if any):</label>
                <input type="file" name="kcse_copy" id="kcse_copy">
            </li>
            <li>
                <label for="professional_certificate">Copy of Professional Certificate:</label>
                <input type="file" name="professional_certificate" id="professional_certificate">
            </li>
            <li>
                <label for="diploma_copy">Copy of Diploma:</label>
                <input type="file" name="diploma_copy" id="diploma_copy">
            </li>
            <li>
                <label for="high_diploma_copy">Copy of High Diploma:</label>
                <input type="file" name="high_diploma_copy" id="high_diploma_copy">
            </li>
            <li>
                <label for="degree_copy">Copy of Degree:</label>
                <input type="file" name="degree_copy" id="degree_copy">
            </li>
            <li>
                <label for="master_degree_copy">Copy of Master Degree:</label>
                <input type="file" name="master_degree_copy" id="master_degree_copy">
            </li>
            <li>
                <label for="phd_copy">Copy of Ph.D:</label>
                <input type="file" name="phd_copy" id="phd_copy">
            </li>
            <li>
                <label for="birth_certificate_copy">Copy of your birth certificate:</label>
                <input type="file" name="birth_certificate_copy" id="birth_certificate_copy">
            </li>
        </ol>
  <h2>5. Declaration</h2>

    <p>
        I certify that the particulars given on this form are correct and understand that any incorrect/misleading information may lead to disqualification and/or legal action.
    </p>

    <p>
        Application Date: <input type="date" id="application date" name="application date"> <input type="submit" value="Submit">
    </p>

</body>
</html>
