------------------ นำส่งแจ้งเตือน ---------------

select ID,PeriodNotify as DateNotify from (

select  a.ID,(DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) as PeriodNotify ,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate  ,(case 

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) > CURDATE() 
          then '0'

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) <= CURDATE() 
          then '1'  

          end) as StatusProject
,(case 

          when (SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1)  < CURDATE() 
          then  '1'
           else '0'

          end) as IsOverDue from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0 and IsCancel = 0
)a where Progress != 0

)a 

------------------ นำส่งแจ้งเตือน ---------------



------------------ ผู้เกี่ยวข้อง ------------------
SELECT b.Username,'https://projectmanage.webclient.me/assets/dist/img/avatar.png' FROM SignGroup a 
                join Member b on a.MemberID = b.ID
                where a.ID = (select SignGroupID from(
                SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                                FROM Project a where IsSuccess = 0  and IsCancel = 0
                )a where ID = 11) and a.MemberID != 0
------------------ ผู้เกี่ยวข้อง ------------------
