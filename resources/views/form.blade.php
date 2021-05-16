<x-header  />
<form method="post" action="con" enctype="multipart/form-data">
@csrf
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="fname" placeholder="father name"><br>
Age:- <select name="age" id="age">
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
</select><br>
Gender:- <input type="radio" name="gender" id="gender" value="male">male
<input type="radio" name="gender" id="gender" value="Female">Female
hobbies:- <input type="checkbox" name="hobbies[0]" value="football">football
<input type="checkbox" name="hobbies[1]" value="cricket">cricket<input type="checkbox" name="hobbies[2]" value="chess">chess<input type="checkbox" name="hobbies[3]" value="swimming">swimming<br>

<input type="email" name="email" placeholder="email"><br>
DOB:- <input type="date" name="dob"><br>
<input type="file" name="photo">
<input type="password" name="password" value="password">
<button type="submit" name="submit">submit</button>