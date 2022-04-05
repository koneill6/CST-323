<?php
use App\Services\Data\SecurityDAO;
use Illuminate\Support\Facades\DB;


//$DAO = new SecurityDAO();
$testUsers = DB::table('milestone')->get();

?>
<!DOCTYPE html>
<html lang="">
    <body>
    <h2>Test Database</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($testUsers as $testUser ){?>
            <tr>
                <td><?php echo $testUser ->idMilestone;?></td>
                <td><?php echo $testUser ->firstName;?></td>
                <td><?php echo $testUser ->lastName;?></td>
            </tr>
            <?php } ?>            </tbody>
        </table>
    </body>
</html>

