<p>以下、fields.bladeから移植してます</p>
<p>管理画面の投稿機能を実装中</p>

{{ Form::open(['url' => 'admin/posts', 'method' => 'post']) }}

    <h4>情報を編集する</h4>

    <p>駐輪場のある区を選択してください</p>
    <p>[memo]プルダウンで6区から選択できるようにする</p>
    <select id="selectid" name="ward">
        <option>区を選択してください</option>
        <option value="chiyoda">千代田区</option>
        <option value="chuo">中央区</option>
        <option value="minato">港区</option>
        <option value="shinjuku">新宿区</option>
        <option value="shibuya">渋谷区</option>
        <option value="shinagawa">品川区</option>
    </select>

    <p>駐輪場名を入力してください</p>
    <input placeholder="駐輪場名" type="text" name="lotname">

    <p>住所を入力してください</p>
    <input id="disp" placeholder="住所" type="text" name="address">

    <p>駐輪料金を入力してください</p>
    <input placeholder="料金" type="text" name="fee">

    <p>収容台数を入力してください</p>
    <input placeholder="収容台数" type="text" name="totalnumbers">

    <p>説明を入力してください</p>
    <textarea placeholder="駐輪場の説明" type="text" name="text"></textarea>

    <p>画像を投稿してください</p>
    <input placeholder="画像のURL" type="text" name="image">

    <input type="submit" value="登録">
    
{{ Form::close() }}

<script>
    $("#selectid").change( function(){
        var selectval = $("#selectid option:selected").text();
        $("#disp").val(selectval);
    });
</script>