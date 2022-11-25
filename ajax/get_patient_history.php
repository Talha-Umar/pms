<?php 
	include '../config/connection.php';

  	$patientId = $_GET['patient_id'];

    $data = '';
    /**
    medicines (medicine_name)
    patient_visits (visit_date, next_visit_date, chief_complaint, advised, clinical_history)
    patient_medication_history (quantity, dosage)

    */
    $query = "SELECT `m`.`medicine_name`, 
    `pv`.`visit_date`, `pv`.`next_visit_date`, `pv`.`advised`, `pv`.`clinical_history`,`pv`.`chief_complaint`,`pv`.`clinical_history`,
    `pmh`.`quantity`, `pmh`.`dosage` 
    from `medicines` as `m`,`medicine_details` as `md`, `patient_visits` as `pv`, `patient_medication_history` as `pmh` 
    where `m`.`id` = `md`.`medicine_id` and 
    `pv`.`patient_id` = $patientId and 
    `pv`.`id` = `pmh`.`patient_visit_id` and 
    `md`.`id` = `pmh`.`medicine_details_id` 
    order by `pv`.`id` asc, `pmh`.`id` asc;";

    try {
      $stmt = $con->prepare($query);
      $stmt->execute();

      $i = 0;
      while($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $i++;
        $data = $data.'<tr>';
        
        $data = $data.'<td class="px-2 py-1 align-middle text-center">'.$i.'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle">'.date("M d, Y", strtotime($r['visit_date'])).'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle">'.date("M d, Y", strtotime($r['next_visit_date'])).'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle">'.$r['chief_complaint'].'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle">'.$r['medicine_name'].'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle text-right">'.$r['advised'].'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle text-right">'.$r['clinical_history'].'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle text-right">'.$r['quantity'].'</td>';
        $data = $data.'<td class="px-2 py-1 align-middle text-right">'.$r['dosage'].'</td>';

        $data = $data.'</tr>';
      }
      $sql = "SELECT sum(tbill) as tbill, sum(pbill) as pbill, sum(rbill) as rbill FROM patient_visits";
        $st = $con->prepare($sql);
      $st->execute();
      $row = $st->fetch(PDO::FETCH_ASSOC);
      $data = $data.'<tr>';
       $data = $data.'<th colspan="7" class="px-2 py-1 align-middle text-right">'."Total Bill: ".'</th>';
        $data = $data.'<th colspan="2" class="px-2 py-1 align-middle text-center">'.$row['tbill'].'</th>';
       $data = $data.'</tr>';

        $data = $data.'<tr>';
       $data = $data.'<th colspan="7" class="px-2 py-1 align-middle text-right">'."Payed Amount: ".'</th>';
        $data = $data.'<th colspan="2" class="px-2 py-1 align-middle text-center">'.$row['pbill'].'</th>';
       $data = $data.'</tr>';

        $data = $data.'<tr>';
       $data = $data.'<th colspan="7" class="px-2 py-1 align-middle text-right">'."Remaining Amount: ".'</th>';
        $data = $data.'<th colspan="2" class="px-2 py-1 align-middle text-center">'.$row['rbill'].'</th>';
       $data = $data.'</tr>';

    } catch(PDOException $ex) {
      echo $ex->getTraceAsString();
      echo $ex->getMessage();
      exit;
    }

  	echo $data;
?>