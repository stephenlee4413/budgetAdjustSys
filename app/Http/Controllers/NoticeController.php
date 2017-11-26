<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

class NoticeController extends Controller
{
    //处理通知中的文件上传
    public function list(){
        //显示目前上传的文件列表
        /*
         * 希望通过检索文件夹，获取当前文件夹目录下的文件列表
         * 通过storage::files方法实现
         * */
        $listItem = \Storage::files('uploads');
        $links = array();
        foreach ($listItem as $item) {
            $links[] = storage_path('app').'/'.$item;
        }

        return view('pages.uploadFile',compact('listItem','links'));
    }


    //文件上传成功，可以将文件正确的存放在制定的位置
    public function upload(Request $request){

        if ($request->isMethod('post')) {
            //处理文件上传请求
            $file = $request->file('source');

            //判断文件是否上传成功
            if ($file->isValid()){
                $originalName = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $realPath = $file->getRealPath();
                $fileType = $file->getClientMimeType();

                //上传文件
                $uploadFileName = date('Y-m-d').'-'.$originalName;
                //将上传文件放置到我们设定的存放空间位置
                $bool = \Storage::disk('upload')->put($uploadFileName,file_get_contents($realPath));

                return redirect()->back();
            }
        }

    }

    /*
     * 下载public里面的通知公告
     * 11-26日
     * */
    public function download(Request $request) {
        $url = $request->get('url');
//        $url = storage_path('app/uploads').'/'.'2017-11-26-鉴别原厂投影灯.docx.docx';
//        dd($url);
        return response()->download($url);
    }
}
