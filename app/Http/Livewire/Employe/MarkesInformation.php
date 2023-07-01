<?php

namespace App\Http\Livewire\Employe;

use App\Models\EmployeMarkesDetail;
use Livewire\Component;

class MarkesInformation extends Component
{
  public $a_markes, $b_markes, $c_markes, $d_markes, $e_markes, $f_markes, $total,$post;
  protected $rules = [
    'total' => 'required',
  ];
  public function render()
  {
    return view('livewire.employe.markes-information');
  }
  public function calculate()

  {
    $this->total = (int)($this->a_markes) + (int)($this->b_markes) + (int)($this->c_markes) + (int)($this->d_markes) - (int)($this->e_markes) - (int)($this->f_markes);
  }

  public function store()
  {
    $this->validate();

    EmployeMarkesDetail::create([
      'employe_details_id' => $this->post,

      'mark_a' => $this->a_markes,
      'edit_mark_a' => $this->a_markes,

      'mark_b_1' => $this->b_markes,
      'edit_mark_b_1' => $this->b_markes,

      'mark_b_2' => $this->c_markes,
      'edit_mark_b_2' => $this->c_markes,

      'mark_b_3' => $this->d_markes,
      'edit_mark_b_3' => $this->d_markes,

      'mark_c' => $this->e_markes,
      'edit_mark_c' => $this->e_markes,

      'mark_d' => $this->f_markes,
      'edit_mark_d' => $this->f_markes,

      'mark_tot' => $this->total,
      'edit_mark_tot' => $this->total,

    ]);
    //return redirect('employe/employe_work')->with('employe',$id);
    return redirect(route('employe.employe_requests',$this->post));
  }
}
