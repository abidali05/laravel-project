<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
    public function addText(Request $request)

    {
        $createText = Text::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('view_texts');
    }

    public function viewText()

    {
        $texts = Text::simplePaginate(5);
        return view('dashboard.text.view_texts', compact('texts'));
    }

    public function destroy($id)

    {
        $destroyText = Text::find($id)
                            ->delete();
        return redirect()->back();
    }

    public function editText($id)

    {
        $editText = Text::find($id);
        return view('dashboard.text.edit_text', compact('editText'));
    }

    public function updateText(Request $request, $id)

    {
        $updateText = Text::find($id);
        $updateText->title = $request->input('title');
        $updateText->description = $request->input('description');
        $updateText->update();
        return redirect('view_texts');
    }
}
