<table width="600" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;">
    <tr>
        <td width="101" style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><?php echo html_escape(element('site_title', $emailform)); ?></td>
        <td width="497" style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요 대표님,</span><br />하이애드원입니다.
        </td>
    </tr>
    <tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;">
        <td colspan="2" style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;">
        <p>안녕하세요, 신규 DB 항목입니다.</p>
        <p>이름 : <?php echo html_escape(element('mlh_name', $emailform)); ?></p>
        <p>연락처 : <?php echo html_escape(element('mlh_mobileno', $emailform)); ?></p>
        <p>성별 : <?php echo element('mlh_gender', $emailform)==='2' ? '남성':'여성' ?></p>
        <p>나이 : <?php echo html_escape(element('mlh_age', $emailform)); ?></p>
        <p>렌탈상품 : <?php echo html_escape(element('mlh_val1', $emailform)); ?></p>
        <p>통화가능시간 : <?php echo html_escape(element('mlh_text', $emailform)); ?></p>
        <p>매체코드 : <?php echo html_escape(element('multi_code', $emailform)); ?></p>
        <p>감사합니다.</p>
        </td>
    </tr>
</table>
