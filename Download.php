
<?php include("Connection.php");
$id = $_GET['id'];

$querry = "select * from form where id = '$id'";
$data = mysqli_query($conn,$querry);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link rel="stylesheet" href="ProgramDetails.css">
</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">Update Student details</h2>
        <form action="pdf.php" method ="POST">
            <div class="form-group">
                <input type="hidden" name="id" id="id">
            </div>
            <div class="form-group">
                <label for="name">Full Name: <span>*</span></label>
                <input type="text" value="<?php echo $result['name'] ;?>"placeholder="Enter your full name" name="name" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester: <span>*</span></label>
                <select name="sem" id="sem"  required >
                <option value="" hidden>----Select----</option>

                <option value="Sem I" 
                <?php
                        if($result['semester'] == 'Sem I')
                        {
                            echo "selected";
                        }
                    ?>
                >Sem I</option
                >
                </select>
            </div>
            <div class="form-group">
                <label for="programCode">Program Code: <span>*</span></label>
                <select name="pc" id="pc" required>
                <option value="" hidden>----Select----</option>
                <option value="3331261"
                <?php
                        if($result['ProgramCode'] == '3331261')
                        {
                            echo "selected";
                        }
                    ?>
                >3331261</option>
                </select>
            </div>
            <div class="form-group">
                <label for="programName">Program Name: <span>*</span></label>
                <select name="pn" id="pn" required>
                <option value="" hidden>----Select----</option>
                <option value="M.A.(German Studies)"
                <?php
                        if($result['ProgramName'] == 'M.A.(German Studies)')
                        {
                            echo "selected";
                        }
                    ?>
                >
                M.A.(German Studies)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="courseCode">Course Code: COMPULSORY 1st Subject <span>*</span></label><br>
                <select name="cc1" id="cc" required>
                <option value="" hidden>----Select----</option>
                <option value="[501101] Novel & Drama"
                    <?php
                        if($result['CompCourse1'] == '[501101] Novel & Drama')
                        {
                            echo "selected";
                        }
                    ?>
                >[501101] Novel & Drama </option>
                <option value ="[501201] European Cultural History"
                    <?php
                        if($result['CompCourse1'] == '[501201] European Cultural History')
                        {
                            echo "selected";
                        }
                    ?>
                >[501201] European Cultural History </option>
                <option value="[501301] Advanced German Skills"
                    <?php
                        if($result['CompCourse1'] == '[501301] Advanced German Skills')
                        {
                            echo "selected";
                        }
                    ?>
                > [501301] Advanced German Skills </option>
                <option value="[501401] Linguistics"
                    <?php
                        if($result['CompCourse1'] == '[501401] Linguistics')
                        {
                            echo "selected";
                        }
                    ?>
                > [501401] Linguistics </option>
                </select>
            </div>
            <div class="form-group">
                <label for="courseCode">Course Code: COMPULSORY 2nd subject <span>*</span></label><br>
                <select name="cc2" id="cc" required>
                <option value="" hidden>----Select----</option>
                <option value="[501101] Novel & Drama"
                <?php
                        if($result['CompCourse2'] == '[501101] Novel & Drama')
                        {
                            echo "selected";
                        }
                    ?>
                > [501101] Novel & Drama </option>
                <option value ="[501201] European Cultural History"
                <?php
                        if($result['CompCourse2'] == '[501201] European Cultural History')
                        {
                            echo "selected";
                        }
                    ?>
                > [501201] European Cultural History </option>
                <option value="[501301] Advanced German Skills"
                <?php
                        if($result['CompCourse2'] == '[501301] Advanced German Skills')
                        {
                            echo "selected";
                        }
                    ?>
                > [501301] Advanced German Skills </option>
                <option value="[501401] Linguistics"
                <?php
                        if($result['CompCourse2'] == '[501401] Linguistics')
                        {
                            echo "selected";
                        }
                    ?>
                > [501401] Linguistics </option>
                </select>
            </div>
            <div class="form-group">
                <label for="courseCode">Course Code: COMPULSORY 3rd subject <span>*</span></label><br>
                <select name="cc3" id="cc" required>
                <option value="" hidden>----Select----</option>
                <option value="[501101] Novel & Drama"
                <?php
                        if($result['CompCourse3'] == '[501101] Novel & Drama')
                        {
                            echo "selected";
                        }
                    ?>
                > [501101] Novel & Drama </option>
                <option value ="[501201] European Cultural History"
                <?php
                        if($result['CompCourse3'] == '[501201] European Cultural History')
                        {
                            echo "selected";
                        }
                    ?>
                > [501201] European Cultural History </option>
                <option value="[501301] Advanced German Skills"
                <?php
                        if($result['CompCourse3'] == '[501301] Advanced German Skills')
                        {
                            echo "selected";
                        }
                    ?>
                > [501301] Advanced German Skills </option>
                <option value="[501401] Linguistics"
                <?php
                        if($result['CompCourse3'] == '[501401] Linguistics')
                        {
                            echo "selected";
                        }
                    ?>
                > [501401] Linguistics </option>
                </select>
            </div>
            <div class="form-group">
                <label for="courseCode">Course Code: COMPULSORY 4th subject <span>*</span></label><br>
                <select name="cc4" id="cc" required>
                <option value="" hidden>----Select----</option>
                <option value="[501101] Novel & Drama"
                <?php
                        if($result['CompCourse4'] == '[501101] Novel & Drama')
                        {
                            echo "selected";
                        }
                    ?>
                > [501101] Novel & Drama </option>
                <option value ="[501201] European Cultural History"
                <?php
                        if($result['CompCourse4'] == '[501201] European Cultural History')
                        {
                            echo "selected";
                        }
                    ?>
                > [501201] European Cultural History </option>
                <option value="[501301] Advanced German Skills"
                <?php
                        if($result['CompCourse4'] == '[501301] Advanced German Skills')
                        {
                            echo "selected";
                        }
                    ?>
                > [501301] Advanced German Skills </option>
                <option value="[501401] Linguistics"
                <?php
                        if($result['CompCourse4'] == '[501401] Linguistics')
                        {
                            echo "selected";
                        }
                    ?>
                > [501401] Linguistics </option>
                </select>
            </div>
<!--                 
                <input type="checkbox" name="cc" value="[501101] Novel & Drama"> [501101] Novel & Drama <br>
                <input type="checkbox" name="cc" value ="[501201] European Cultural History"> [501201] European Cultural History <br>
                <input type="checkbox" name="cc" value="[501301] Advanced German Skills"> [501301] Advanced German Skills <br>
                <input type="checkbox" name="cc" value="[501401] Linguistics"> [501401] Linguistics <br>
                <input type="checkbox" name="cc" value="[501601] Research Methodology"> [501601] Research Methodology <br>
                 -->
            
            <div class="form-group">
                <label for="courseCode">Course Code: Elective 1st Subject <span class="span">*</span></label><br>
                <select name="ec1" id="cc" required>
                <option value="" hidden>----Select----</option>

                <option value="[501501] Film Studies"
                    <?php
                        if($result['ElecCourse1'] == '[501501] Film Studies')
                        {
                            echo "selected";
                        }
                    ?>
                > 
                [501501] Film Studies </option>
                <option  value="[501502] Business Translation"
                    <?php
                            if($result['ElecCourse1'] == '[501502] Business Translation')
                            {
                                echo "selected";
                            }
                    ?>
                > 
                [501502] Business Translation </option>
                <option  value="[501303] History of German Literature"
                    <?php
                            if($result['ElecCourse1'] == '[501303] History of German Literature')
                            {
                                echo "selected";
                            }
                    ?>
                > 
                [501303] History of German Literature</option>
                <option  value="[501503] Any course"
                    <?php
                            if($result['ElecCourse1'] == '[501503] Any course')
                            {
                                echo "selected";
                            }
                    ?>
                > 
                [501503] Any course</option>
                </select>
            </div>
            <div class="form-group">
                <label for="courseCode">Course Code: COMPULSORY 5th subject <span>*</span></label><br>
                <select name="cc5" id="cc" required>
                <option value="" hidden>----Select----</option>
                <option value="[501601] Research Methodology"
                <?php
                        if($result['CompCourse5'] == '[501601] Research Methodology')
                        {
                            echo "selected";
                        }
                    ?>
                > [501601] Research Methodology </option>
                </select>
            </div>
                <!-- <input type="checkbox" name="ec" value="[501501] Film Studies"> [501501] Film Studies <br>
                <input type="checkbox" name="ec" value="[501502] Business Translation"> [501502] Business Translation <br>
                <input type="checkbox" name="ec" value="[501303] History of German Literature"> [501303] History of German Literature <br>
                <input type="checkbox" name="ec" value="[501503] Any course"> [501503] Any course <br>
                <input type="checkbox" name="ec" value="[501501] Film Studies"> [501501] Film Studies <br>
             -->
            
            <input type="submit" name="download" value="Download">
        </form>
    </div>
</body>
</html>


