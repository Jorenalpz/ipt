<?php

namespace App\Http\Livewire\Records;

use Livewire\Component;
use App\Models\User;
use App\Models\Shoe;
use Livewire\WithPagination;


class Index extends Component
{
    public $search, $store="all";
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function loadRecords(){
        $query = Shoe::orderBy('brand')
            ->search($this->search);

        if($this->store != 'all'){
            $query->where('store', $this->store);
           
        }
        $records = $query->paginate(5);
        return compact('records');
    }
    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function back(){
        return redirect('/admin/patients/');
    }

    public function resetInput()
    {
        $this->brand = '';
        $this->quantity = '';
        $this->size = '';
        $this->store = '';
        $this->delivery_date = '';
    }
    public $brand, $quantity, $size, $delivery_date, $user_id;

    public function addRecord(){
        $this->validate([
            'brand' => ['required', 'string'],
            'quantity' => ['required', 'string'],
            'size' => ['required', 'string'],
            'store' => ['required', 'string'],
            'delivery_date' => ['required', 'string'],
        ]);

        $record = Shoe::create([
            'user_id' => auth()->id(),
            'brand' => $this->brand,
            'quantity' => $this->quantity,
            'size' => $this->size,
            'store' => $this->store,
            'delivery_date' => $this->delivery_date,
        ]);
        return redirect()->to('/admin/records');
        session()->flash('message','Record Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updateRecord(){
        $this->validate([
            'brand' => ['required', 'string'],
            'quantity' => ['required', 'string'],
            'size' => ['required', 'string'],
            'store' => ['required', 'string'],
            'delivery_date' => ['required', 'string'],
        ]);
        $treatmentrecord = Shoe::findOrFail($this->record_id);
        $treatmentrecord->where('id',$this->record_id)->update([
            'brand' => $this->brand,
            'quantity' => $this->quantity,
            'size' => $this->size,
            'store' => $this->store,
            'delivery_date' => $this->delivery_date,
        ]);
        return redirect()->to('/admin/records');
        session()->flash('message','Record Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editTreatment(int $record_id){
        $record = Shoe::find($record_id);
        if($record){
            $this->record_id = $record->id;
            $this->brand = $record->brand;
            $this->quantity = $record->quantity;
            $this->size = $record->size;
            $this->store = $record->store;
            $this->delivery_date = $record->delivery_date;
        }else{
            return redirect()->to('/admin/records');
        }
    }
    public function deleteRecord(int $record_id)
    {
        $this->record_id = $record_id;
    }

    public function destroyRecord()
    {
        Shoe::find($this->record_id)->delete();
        session()->flash('message','Record Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
       $users = User::get();
        // $records = Shoe::where('store', 'like', '%'.$this->search.'%')
        //     ->orWhere('quantity', 'like', '%'.$this->search.'%')
        //     ->orWhere('size', 'like', '%'.$this->search.'%')
        //         ->orderBy('brand', 'desc')->paginate(5);
        return view('livewire.records.index', compact('users'), $this->loadRecords());
    }
}
