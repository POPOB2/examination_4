<h2 class="ct">新增管理帳號</h2>
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">權限</td>
        <td class="pp">
            <!-- inptut是行內元素, 用div使其變塊級元素 -->
            <div>
                <input type="checkbox" name="pr[]" value="1">商品分類與管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="2">訂單管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="3">會員管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="4">頁尾版權區管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="5">最新消息管理
            </div>   
        </td>
    </tr>
</table>