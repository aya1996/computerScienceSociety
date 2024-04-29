<?php

namespace App\Http\Controllers\Admin\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventRequest;

class EventController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $events = Event::get();
            return view('dashboard.events.index',compact('events'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        try
        {
            if(isset($college))
            {
                return view('dashboard.events.edit',compact('event'));
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function store(EventRequest $request)
    {
        try
        {
            $event = new Event;
            $event->name = $request->name;
            $event->image = $this->upload('image','events');
            $event->video = $request->video;
            $event->save();
            return redirect()->route('events.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(EventRequest $request,$id)
    {
        $event = Event::findOrFail($id);
        try
        {
            if(isset($college))
            {
                $event->update([
                    'name' => $request->name,
                    'image' => $request->image ?  $this->updateFile('image','events',$event->image) : $college->image,
                    'video' => $request->video,
                    
                ]);
                return redirect()->route('events.index')->with('success' ,'تم التعديل بنجاح');
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }


    public function destroy($id)
    {
        try
        {
            $event = Event::find($id);
            if(isset($event))
            {
                $event->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
