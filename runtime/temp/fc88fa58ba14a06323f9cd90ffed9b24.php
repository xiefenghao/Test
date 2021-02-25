<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xamp\htdocs\ht\public/../application/index\view\index\shop4.html";i:1603029565;}*/ ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>生成表格</title>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <style type="text/css">
        .hide {display: none;}
        .mt10 {margin-top: 10px;}
        .control-group {overflow: hidden;}
        .control-group a {color: #666;text-decoration: none;}
        .control-group a:hover {text-decoration: underline;}
        .control-label {float: left;width: 100px;line-height: 24px;}
        .controls {overflow: hidden;}
        .controls input[type="text"] {border: 1px solid #ddd;height: 20px;width: 120px;}
        .controls input[type="button"] {margin-top: 10px;height: 32px;cursor: pointer;}
        .config_item {margin-top: 10px;border: 1px dashed #ddd;padding: 10px;}
        .config_item section {margin-top: 10px;}
        .config_item section span {margin-right: 16px;}
        .config_item input[type="text"] {width: 80px;text-align: center;}
        .choose_config .Father_Title {margin: 0;margin-bottom: 10px;padding: 0;font-size: 16px;font-weight: normal;display: inline-block;vertical-align: middle;}
        .choose_config .Father_Item {padding: 0;margin: 0;margin-bottom: 10px;list-style: none;display: inline-block;vertical-align: middle;}
        .choose_config .Father_Item li {display: inline-block;margin-right: 10px;}
        .columnList {border-collapse: collapse;}
        .columnList th {background-color: #eee;}
        .columnList th,.columnList td {padding: 5px 10px;border: 1px solid #ddd;line-height: 24px;text-align: center;}
    </style>
</head>
<body>
<!-- 选择信息 -->
<div class="control-group choose_config">
    <div class="control-label">选择信息：</div>
    <div class="controls">
        <h3 class="Father_Title">颜色：</h3>
        <ul class="Father_Item Father_Item0">
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_all" value="全选">全选</label></li>
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_item" value="红色">红色</label></li>
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_item" value="白色">白色</label></li>
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_item" value="土豪金">土豪金</label></li>
        </ul><br>
        <h3 class="Father_Title">内存：</h3>
        <ul class="Father_Item Father_Item1">
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_all" value="全选">全选</label></li>
            <li><label><input id="Checkbox1" type="checkbox" class="checkbox check_item" value="32G">32G</label></li>
            <li><label><input id="Checkbox1" type="checkbox" class="checkbox check_item" value="16G">16G</label></li>
        </ul><br>
        <h3 class="Father_Title">尺寸：</h3>
        <ul class="Father_Item Father_Item2">
            <li><label><input id="Checkbox0" type="checkbox" class="checkbox check_all" value="全选">全选</label></li>
            <li><label><input id="Checkbox2" type="checkbox" class="checkbox check_item" value="5.5">5.5</label></li>
            <li><label><input id="Checkbox2" type="checkbox" class="checkbox check_item" value="4.5">4.5</label></li>
            <li><label><input id="Checkbox2" type="checkbox" class="checkbox check_item" value="3.5">3.5</label></li>
        </ul><br>
    </div>
</div>
<!-- 生成表格 -->
<div class="control-group mt10">
    <div class="control-label">生成表格：</div>
    <div class="controls" id="createTable">

    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
/**
 * Created by Administrator on 14-12-01.
 * 模拟淘宝SKU添加组合
 * 页面注意事项：
 *      1、 .Father_Title      这个类作用是取到所有标题的值，赋给表格，如有改变JS也应相应改动
 *      2、 .Father_Item       这个类作用是取类型组数，有多少类型就添加相应的类名：如: Father_Item1、Father_Item2、Father_Item3 ...
 */
$(function() {
    $(document).on('change', '.choose_config label', function() {
        var parent=$(this).parents('.Father_Item');
        var _this=$('.checkbox',this);
        // 是否全选
        $('.checkbox',parent).each(function() {
            var bCheck2=true;
            if (_this.hasClass('check_all')) {
                if (_this.get(0).checked) {
                    bCheck2=true;
                    $('.check_item',parent).prop('checked', bCheck2);
                }else{
                    bCheck2=false;
                    $('.check_item',parent).prop('checked', bCheck2);
                }
                return false;
            } else {
                if ((!this.checked)&&(!$(this).hasClass('check_all'))) {
                    bCheck2 = false;
                    $('.check_all',parent).prop('checked', bCheck2);
                    return false;
                }
            }
            $('.check_all',parent).prop('checked', bCheck2);
        });

        step.Creat_Table();
    });
    var step = {
        // 信息组合
        Creat_Table: function() {
            step.hebingFunction();
            var SKUObj = $('.Father_Title');
            var arrayTile = new Array(); // 表格标题数组
            var arrayInfor = new Array(); // 盛放每组选中的CheckBox值的对象
            var arrayColumn = new Array(); // 指定列，用来合并哪些列
            var bCheck = true; // 是否全选，只有全选，表格才会生成
            var columnIndex = 0;

            $.each(SKUObj, function(i, item) {
                arrayColumn.push(columnIndex++);
                arrayTile.push(SKUObj.eq(i).text().replace('：', ''));
                var itemName = '.Father_Item' + i;
                var bCheck2 = true; // 是否全选

                // 获取选中的checkbox的值
                var order = new Array();
                $(itemName + ' .check_item:checked').each(function() {
                    order.push($(this).val());
                });

                arrayInfor.push(order);
                if (order.join() == '') {
                    bCheck = false;
                }
            })

            // 开始生成表格
            if (bCheck) {
                $('#createTable').html('');
                var table = $('<table id="process" class="columnList"></table>');
                table.appendTo($('#createTable'));
                var thead = $('<thead></thead>');
                thead.appendTo(table);
                var trHead = $('<tr></tr>');
                trHead.appendTo(thead);
                // 创建表头
                var str = '';
                $.each(arrayTile, function(index, item) {
                    str += '<th width="100">' + item + '</th>';
                })
                str += '<th  width="200">价格</th><th width="100">操作</th>';
                trHead.append(str);
                var tbody = $('<tbody></tbody>');
                tbody.appendTo(table);

                var zuheDate = step.doExchange(arrayInfor);
                if (zuheDate.length > 0) {
                    //创建行
                    $.each(zuheDate, function(index, item) {
                        var td_array = item.split(',');
                        var tr = $('<tr></tr>');
                        tr.appendTo(tbody);
                        var str = '';
                        $.each(td_array, function(i, values) {
                            str += '<td>' + values + '</td>';
                        });
                        str += '<td ><input name="Txt_PriceSon" class="inpbox inpbox-mini" type="text"></td>';
                        str += '<td ><a href="#">删除</a></td>';
                        tr.append(str);
                    });
                }

                //结束创建Table表
                arrayColumn.pop(); //删除数组中最后一项
                //合并单元格
                $(table).mergeCell({
                    // 目前只有cols这么一个配置项, 用数组表示列的索引,从0开始
                    cols: arrayColumn
                });
            } else {
                //未全选中,清除表格
                document.getElementById('createTable').innerHTML = "";
            }
        },
        hebingFunction: function() {
            $.fn.mergeCell = function(options) {
                return this.each(function() {
                    var cols = options.cols;
                    for (var i = cols.length - 1; cols[i] != undefined; i--) {
                        mergeCell($(this), cols[i]);
                    }
                    dispose($(this));
                })
            };

            function mergeCell($table, colIndex) {
                $table.data('col-content', ''); // 存放单元格内容
                $table.data('col-rowspan', 1); // 存放计算的rowspan值 默认为1
                $table.data('col-td', $()); // 存放发现的第一个与前一行比较结果不同td(jQuery封装过的), 默认一个"空"的jquery对象
                $table.data('trNum', $('tbody tr', $table).length); // 要处理表格的总行数, 用于最后一行做特殊处理时进行判断之用
                // 进行"扫面"处理 关键是定位col-td, 和其对应的rowspan
                $('tbody tr', $table).each(function(index) {
                    // td:eq中的colIndex即列索引
                    var $td = $('td:eq(' + colIndex + ')', this);
                    // 获取单元格的当前内容
                    var currentContent = $td.html();
                    // 第一次时走次分支
                    if ($table.data('col-content') == '') {
                        $table.data('col-content', currentContent);
                        $table.data('col-td', $td);
                    } else {
                        // 上一行与当前行内容相同
                        if ($table.data('col-content') == currentContent) {
                            // 上一行与当前行内容相同则col-rowspan累加, 保存新值
                            var rowspan = $table.data('col-rowspan') + 1;
                            $table.data('col-rowspan', rowspan);
                            // 值得注意的是 如果用了$td.remove()就会对其他列的处理造成影响
                            $td.hide();
                            // 最后一行的情况比较特殊一点
                            // 比如最后2行 td中的内容是一样的, 那么到最后一行就应该把此时的col-td里保存的td设置rowspan
                            // 最后一行不会向下判断是否有不同的内容
                            if (++index == $table.data('trNum'))
                                $table.data('col-td').attr('rowspan', $table.data('col-rowspan'));
                        }
                        // 上一行与当前行内容不同
                        else {
                            // col-rowspan默认为1, 如果统计出的col-rowspan没有变化, 不处理
                            if ($table.data('col-rowspan') != 1) {
                                $table.data('col-td').attr('rowspan', $table.data('col-rowspan'));
                            }
                            // 保存第一次出现不同内容的td, 和其内容, 重置col-rowspan
                            $table.data('col-td', $td);
                            $table.data('col-content', $td.html());
                            $table.data('col-rowspan', 1);
                        }
                    }
                })
            }
            // 同样是个private函数 清理内存之用
            function dispose($table) {
                $table.removeData();
            }
        },
        doExchange: function(doubleArrays) {
            // 二维数组，最先两个数组组合成一个数组，与后边的数组组成新的数组，依次类推，知道二维数组变成以为数组，所有数据两两组合
            var len = doubleArrays.length;
            if (len >= 2) {
                var arr1 = doubleArrays[0];
                var arr2 = doubleArrays[1];
                var len1 = arr1.length;
                var len2 = arr2.length;
                var newLen = len1 * len2;
                var temp = new Array(newLen);
                var index = 0;
                for (var i = 0; i < len1; i++) {
                    for (var j = 0; j < len2; j++) {
                        temp[index++] = arr1[i] + ',' + arr2[j];
                    }
                }
                var newArray = new Array(len - 1);
                newArray[0] = temp;
                if (len > 2) {
                    var _count = 1;
                    for (var i = 2; i < len; i++) {
                        newArray[_count++] = doubleArrays[i];
                    }
                }
                return step.doExchange(newArray);
            } else {
                return doubleArrays[0];
            }
        }
    }
})
</script>
</body>
</html>
