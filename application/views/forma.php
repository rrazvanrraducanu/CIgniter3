<?php
$this->load->helper('form');
echo form_open();
#<form action="http://127.0.0.1/CIgniter3/FormsController" method="post" accept-charset="utf-8">
#text control
$data = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => 'ura',
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('Username ', 'text1');
echo form_input($data);
echo "<br><br>";
#<label for="text1">Username </label><input type="text" name="text1" value="ura" id="text1" maxlength="100" size="30"  />
#password control
$pass = ['name'          => 'pass1',
        'id'            => 'pass1',
        'maxlength'     => '100',
        'size'          => '30',
       ];
echo form_label('Password ', 'pass1');
echo form_password($pass);
echo "<br><br>";
#<br><br><label for="pass1">Password </label><input type="password" name="pass1" value="" id="pass1" maxlength="100" size="30"  />
#textarea
$text1 = ['name'          => 'textarea1',
          'id'            => 'textarea1',
          'value'         => 'ura',
         'rows'     => '5',
         'cols'          => '30',
       ];
#label
echo form_label('Details ', 'textarea1');
echo form_textarea($text1);
echo "<br><br>";
#<label for="textarea1">Details </label><textarea name="textarea1" cols="30" rows="5" id="textarea1" >ura</textarea>
#fieldset
echo form_fieldset('Checkbox');
#checkbox1
$check1 = ['name'          => 'check1',
          'id'            => 'check1',
          'value'         => 'check1',
       ];
#label
echo form_label('Elev ', 'check1');
echo form_checkbox($check1);
echo "<br><br>";
#checkbox2
$check2 = ['name'          => 'check2',
          'id'            => 'check2',
          'value'         => 'check2',
       ];
#label
echo form_label('Student ', 'check2');
echo form_checkbox($check2);

#fieldset close
echo form_fieldset_close();
echo "<br><br>";
#<fieldset>
#<legend>Checkbox</legend>
#<label for="check1">Elev </label><input type="checkbox" name="check1" value="check1" id="check1"  />
#<br><br><label for="check2">Student </label><input type="checkbox" name="check2" value="check2" id="check2"  />
#</fieldset>
#fieldset
echo form_fieldset('Radio');
#radio1
$radio1=['name'          => 'radio1',
          'id'            => 'radio1',
          'value'         => 'Male',
        'checked'=>set_radio('gender', 'Male', FALSE),
];
#label
echo form_label('Male ', 'radio1');
echo form_radio($radio1);
#radio2
$radio2=['name'          => 'radio1',
          'id'            => 'radio1',
          'value'         => 'Female',
          'checked'=>set_radio('gender', 'Female', FALSE),
];
#label
echo form_label('Female ', 'radio2');
echo form_radio($radio2);

#fieldset close
echo form_fieldset_close();
echo "<br><br>";
#<fieldset>
#<legend>Radio</legend>
#<label for="radio1">Male </label><input type="radio" name="radio1" value="Male" id="radio1"  />
#<label for="radio2">Female </label><input type="radio" name="radio1" value="Female" id="radio1"  />
#</fieldset>
#combobox
$drop=[
    'small'=>'Small',
    'medium'=>'Medium',
    'large'=>'Large',
    'xlarge'=>'Extra Large', 
];
#label
echo form_label('Choose: ', '');
echo form_dropdown('drop ', $drop,'medium');
echo "<br><br>";
#<label>Choose: </label><select name="drop ">
#<option value="small">Small</option>
#<option value="medium" selected="selected">Medium</option>
#<option value="large">Large</option>
#<option value="xlarge">Extra Large</option>
#</select>
#listbox
$list=[
    'small'=>'Small',
    'medium'=>'Medium',
    'large'=>'Large',
    'xlarge'=>'Extra Large', 
];
#label
echo form_label('Choose: ', '');
echo form_multiselect('select[]', $list ,'medium');
echo "<br><br>";
#<label>Choose: </label><select name="select[]"  multiple="multiple">
#<option value="small">Small</option>
#<option value="medium" selected="selected">Medium</option>
#<option value="large">Large</option>
#<option value="xlarge">Extra Large</option>
#</select>
#submit button
echo form_submit('submit', 'Submit!');
#<input type="submit" name="submit" value="Submit!"  />

#reset button
echo form_reset('reset','Reset');
#<input type="reset" name="reset" value="Reset"  />

echo form_close();

