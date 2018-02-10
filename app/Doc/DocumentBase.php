<?php
/**
 * Created by PhpStorm.
 * User: xiang
 * Date: 2018/2/10
 * Time: 11:43
 */

namespace App\Doc;


class DocumentBase
{

    private $inPtc = array();
    private $outPtc = array();
    private $description = "";
    private $notice = "";
    private $statusCode = array();


    public function __construct()
    {

    }



    public function getInPtc()
    {
        return $this->inPtc;
    }

    public function getOutPtc()
    {
        return $this->outPtc;
    }

}