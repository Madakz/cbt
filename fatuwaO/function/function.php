<?php
class App
{
	function db_connect() 
	{
        $server = 'localhost';
        $username = 'root';
        $password = 'businka123';
        $conn = mysql_connect($server, $username, $password) or die(mysql_error());
        $db = mysql_select_db('fatuwa') or die('Unable to extablish a connection to the database');
    }

		function fetch($table, $id){
			if ($id=='') {
				$qwery = mysql_query("SELECT * FROM $table ORDER BY id DESC") or die(mysql_error());
			}else{
				$qwery = mysql_query("SELECT * FROM $table WHERE id='$id'") or die(mysql_error());
			}
			
				switch ($table) {
					case "biodata":
						?>
						<div class="col-md-12"><caption><h3 style="text-align:center;"><b>Student Table</b></h3></caption><table width="100%" border="1" style="border-collapse:collapse;" id="myTable" class="table">
							<thead>
								<th>SN</th>
								<th>jamb number</th>
								<th>first_name</th>
								<th>sur_name</th>
				                <th>other_name </th>
				                <th>gender</th>
				                <th>date_birth</th>
				                <th>course</th>
				                <th>subject1</th>
				                <th>subject2</th>
				                <th>subject3</th>
				                <th>subject4</th>
				                <th>phone</th>
				                <th>email</th>
				                <th>grade</th>
				                <th>image</th>
				                <th>Operation</th>
				            </thead>
					<?php
							$sn=1;
							while($row_found=mysql_fetch_array($qwery)){
							?>
							<tbody>
								<?php echo	'<tr>' .
					                    '<td>' . $sn . '</td>' .
					                    '<td>' . $row_found["jam_number"] . '</td>' .
					                    '<td>' . $row_found["first_name"] . '</td>' .
					                    '<td>' . $row_found["sur_name"] . '</td>' .
					                    '<td>' . $row_found["other_name"] . '</td>' .
					                    '<td>' . $row_found["gender"] . '</td>' .
					                    '<td>' . $row_found["date_birth"] . '</td>' .
					                    '<td>' . $row_found["course"] . '</td>' .
					                    '<td>' . $row_found["subject1"] . '</td>' .
					                    '<td>' . $row_found["subject2"] . '</td>' .
					                    '<td>' . $row_found["subject3"] . '</td>' .
					                    '<td>' . $row_found["subject4"] . '</td>' .
					                    '<td>' . $row_found["phone"] . '</td>' .
					                    '<td>' . $row_found["email"] . '</td>' .
					                    '<td>' . $row_found["grade"] . '</td>' .
					                    '<td>' . $row_found["image"] . '</td>' .
					                    '<td><a  href="delete.php?student='.$row_found['id'].'">delete</a></td>'. 
					                   '</tr>';
			                   ?>
							</tbody>
							<?php
							$sn ++;
							}?>
						</table>
						</div>						
						<?php
				
						break;
					case "questions":
						?>
						<div class="col-md-12"><caption><h3 style="text-align:center;"><b>Question Table</b></h3></caption><table style="border-collapse:collapse;" id="myTable" class="table-bordered">
							<thead>
								<th>SN</th>
				                <th>Question</th>
				                <th>Subject id</th>
				                <th>Option A</th>
				                <th>Option B </th>
				                <th>Option C</th>
				                <th>Option D</th>
				                <th>Answer</th>
				                <th>Operation</th>
				            </thead>
								<?php
								$sn=1;
								while($sql_found=mysql_fetch_array($qwery)){
									$qid=$sql_found['id'];
									$sql=mysql_query("SELECT subject.name AS sname FROM subject JOIN questions ON subject.id=questions.subject_id WHERE questions.id='$qid'") or die(mysql_error());
									$fetch=mysql_fetch_array($sql);
									?>
									<tbody>
									<?php
										echo '<tr>'.
				                        '<td>' . $sn . '</td>' .
				                        '<td>' . $sql_found["question"] . '</td>' .
				                        '<td>' . $fetch["sname"] . '</td>' .
				                        '<td>' . $sql_found["option_a"] . '</td>' .
				                        '<td>' . $sql_found["option_b"] . '</td>' .
				                        '<td>' . $sql_found["option_c"] . '</td>' .
				                        '<td>' . $sql_found["option_d"] . '</td>' .
				                        '<td>' . $sql_found["answer"] . '</td>' . 
				                        '<td><a  href="delete.php?question='.$sql_found['id'].'">delete</a></td>'.                   
				                       '</tr>';
				                       ?>
									</tbody>
									<?php
									$sn ++;
									}?>
							</table>
						</div>
						<?php
						break;
					case "answers":
						?>
						<div class="col-md-12"><caption><h3 style="text-align:center;"><b>Answer Table</b></h3></caption><table width="100%" border="1" style="border-collapse:collapse;" id="myTable" class="table">
								<thead>
									<th>SN</th>
					                <th>answer</th> 
					                <th>Student</th>
					                <th>subject</th>
					                <th>question</th>
					            </thead>
									<?php
									$sn=1;
									while($row=mysql_fetch_array($qwery)){
										$sql=mysql_query("SELECT subject.name AS sname, biodata.sur_name AS surname, biodata.first_name AS firstname, questions.question AS qname FROM subject JOIN questions ON subject.id=questions.subject_id JOIN biodata JOIN answers ON biodata.id=answers.biodata_id ") or die(mysql_error());
										$fetch=mysql_fetch_array($sql);
										?>
										<tbody>
										<?php
											echo '<tr>'.
					                        '<td>' . $sn . '</td>' .
					                        '<td>' . $row["answer"] . '</td>' .
					                        '<td>' . $fetch["surname"] . " ". $fetch['firstname'].'</td>' .
					                        '<td>' . $fetch["sname"] . '</td>' .
					                        '<td>' . $fetch["qname"] . '</td>' .
					                       '</tr>';
										?>
										</tbody>
									<?php
									$sn ++;
									}?>
							</table>
						</div>
						<?php
						break;
					case "subject":
						?>
						<div class="col-md-12"><caption><h3 style="text-align:center;"><b>Subject Table</b></h3></caption><table width="100%" border="1" style="border-collapse:collapse;" id="myTable" class="table">
							<thead>
								<th>SN</th>
				                <th>Subject</th>
				                <th>operation</th>
				            </thead>
								<?php
								$sn=1;
								while($row=mysql_fetch_array($qwery)){
									?>
									<tbody>		<?php
									echo '<tr>'.
					                        '<td>' . $sn . '</td>' .
					                        '<td>' . $row["name"] . '</td>' .
					                        '<td><a  href="delete.php?subject='.$row['id'].'">delete</a></td>'.              
					                       
					                      '</tr>';
					                   ?>
									</tbody>
								<?php
								$sn ++;
								}?>
							</table>
						</div>
						<?php
						break;
					
					default:
						echo "Not found!!!";
						break;
				
				}
		}

		function delete($tablename, $del){
			$query = mysql_query("DELETE FROM $tablename WHERE id='$del'") or die(mysql_error());
		}


}





























?>