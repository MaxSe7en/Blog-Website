<h1>Add new Blog</h1>
<?php 
// echo Form::open('', array('method'=> 'get'));
echo Form::open();
$break= '<br/>';
echo Form::label('title', 'Title');
echo $break;
echo Form::input('title',$value='', array('class'=> 'form1')); 
echo $break;
echo Form::label('body');
echo $break;
echo Form::textarea('body');
echo $break;
echo Form::submit('submit', 'Create a blog');
echo Form::close();




?>


