<?php
function test_type($type,$var,$typedata) {
    if ($type=="POST") {
        # code...
        $type_fin=$_POST;
    }else{
        $type_fin=$_GET;
    }
    if (isset($type_fin[$var])) {
        switch ($typedata) {
            case 'INT':
                return $datafinal= (int) $type_fin[$var];
                break;
            case 'FLOAT':
                return $datafinal= (FLOAT) $type_fin[$var];
                break;
            case 'BOOL':
                return $datafinal= (BOOL) $type_fin[$var];
                break;
            case 'HTML':
                return $datafinal = filter_var($type_fin[$var], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
            default:
                $datafinal = (STRING) $_POST[$var];
                return htmlentities($datafinal);
                break;
        }
    }
        
    
}