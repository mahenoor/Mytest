<?php
class ValidatingLeave
{
    public function validate($studentRecord)
	{
        $resultOfValidation = true;
        $errorMessageArray = array();
        if (empty($studentRecord['startDate']) || !preg_match("/^(20|16)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/",$studentRecord['startDate'])) {
            $startDateError = "***please enter start date";
            $errorMessageArray['startDate'] = $startDateError; 
            $resultOfValidation = false;
        }
        if (empty($studentRecord['endDate']) || !preg_match("/^(20|16)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/",$studentRecord['endDate'])) {
            $endDateError = "***please enter end date";
            $errorMessageArray['endDate'] = $endDateError; 
            $resultOfValidation = false;
        }
        $validationArray = array("status" => $resultOfValidation, "message" => $errorMessageArray);
        return $validationArray;
	}
}
?>