@extends('layouts.app')
@section('title','资金调整数据修改')

@section('content')
    <div class="" xmlns="http://www.w3.org/1999/html">
        <h3>资金调整申报</h3>
        <hr style="border-color: #2ab27b;size: 12px;"/>

        {{--//取得controller传递过来的结果数据collection,必须通过循环的方式取出结果--}}
        @foreach($resultByID as $result)

        <form action="/update/{{$result->id}}" method="post">
            {{ csrf_field() }}
            <table class="table" class="easyui-datagrid" style="width:auto;height:auto;">
                <thead>
                <tr>
                    <th field="name1" width=auto rowspan="2">单位名称</th>
                    <th field="name2" width=auto rowspan="2">功能科目</th>
                    <th field="name3" width=auto rowspan="2">经济科目</th>
                    <th colspan="3" style="padding-left: 90px; font-size: larger">基本支出</th>
                    <th colspan="2" style="padding-left: 40px; font-size: larger">项目支出</th>
                    <th field="name11" width=auto rowspan="2">合计</th>
                    <th field="name10" width=auto rowspan="2">资金来源</th>
                    <th field="name9" width=auto rowspan="2">其他备注</th>
                </tr>
                <tr>
                    <th field="name4" width="20px">小计</th>
                    <th field="name5" width="20px">人员经费</th>
                    <th field="name6" width="20px">公用经费</th>
                    <th field="name7" width="20px">项目名称及编号</th>
                    <th field="name8" width="20px">金额</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><input style="width:100px;" type="text" name="universityName" value={{ $result->universityName }}></td>
                    <td><input type="text" name="item" placeholder="功能科目" value={{ $result->item }}></td>
                    <td><input type="text" name="fundItem" placeholder="经济科目" value={{ $result->fundItem }}></td>
                    <td><input type="number" step="0.01" style="width: 60px;" name="subtotal" value={{ $result->subtotal }}></td>
                    <td><input type="number" step="0.01" style="width: 60px;" name="person_cost" value={{ $result->person_cost }}></td>
                    <td><input type="number" step="0.01" style="width: 60px;" name="public_cost" placeholder="" value={{ $result->public_cost }}></td>
                    <td><input type="text" style="width: 60px;" name="project_id_name" placeholder="" value={{ $result->project_id_name }}></td>
                    <td><input type="number" step="0.01" style="width: 60px;" name="project_cost" placeholder="" value={{ $result->project_cost }}></td>
                    <td><input type="number" step="0.01" style="width: 60px;" name="total" placeholder="" value={{ $result->total }}></td>
                    <td><input type="text" style="width: 60px;" name="notes" placeholder="" value={{ $result->fund_source }}></td>
                    <td><input type="text" style="width: 60px;" name="notes" placeholder="" value={{ $result->notes }}></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <button class="btn btn-primary" type="reset" >重填</button>
                <button class="btn btn-primary" style="margin-left: 20px;" type="submit">更新</button>
            </div>
        </form>
    </div>
@stop


