<?php	
  global $session;
  if ($this->owner->name=='panel') {
   $out['CONTROLPANEL']=1;
  }	
  $qry="0";
  // search filters
  // QUERY READY
  global $save_qry;
  if ($save_qry) {
   $qry=$session->data['lgps_in'];
  } else {
   $session->data['lgps_in']=$qry;
  }
	
  if (!$qry) $qry="1";
  $sortby_nm_export_s="ID DESC";
  $out['SORTBY']=$sortby_nm_export_s;
  // SEARCH RESULTS
  $res=SQLSelect("SELECT * FROM lgps_in WHERE $qry ORDER BY ".$sortby_nm_export_s);
  if ($res[0]['ID']) {
   //paging($res, 100, $out); // search result paging
   $total=count($res);
   for($i=0;$i<$total;$i++) {
    // some action for every record if required
    $tmp=explode(' ', $res[$i]['UPDATED']);
    $res[$i]['UPDATED']=fromDBDate($tmp[0])." ".$tmp[1];
   }
   $out['RESULT']=$res;
  }
