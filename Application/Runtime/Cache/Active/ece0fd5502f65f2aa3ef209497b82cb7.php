<?php if (!defined('THINK_PATH')) exit();?><form name="giftSend">
    <label>openid</label><input type="text" name="openid" id="openid"/>
    <label>最小金额</label><input type="text" id="minValue" name="minValue" />
    <label>最大金额</label><input type="text" id="maxValue" name="maxValue" />
    <button type="button" onclick="sendGift()">发放</button>
</form>
<?php echo ($js); ?>