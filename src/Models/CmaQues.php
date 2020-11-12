<?php
namespace Edgewizz\Cma\Models;

use Illuminate\Database\Eloquent\Model;

class CmaQues extends Model{
    public function answers(){
        return $this->hasOne('Edgewizz\Cma\Models\CmaAns', 'question_id');
    }
    protected $table = 'fmt_cma_ques';
}