
DATE_ADD(‘2008-05-15’, INTERVAL 10 DAY) 


------ งานสำเร็จรอส่งมอบ -----

select *,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0
)a where Progress = 0 

------ งานสำเร็จรอส่งมอบ -----


------ งานกำลังดำเนินการ -----

select *,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0
)a where Progress != 0 
                
------ งานกำลังดำเนินการ -----




------- แบบมีการลบวันที่ -------

select a.CheckDate,a.PeriodEndDate,







(DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) as PeriodNotify





,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate 





,(case 

	  when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) > CURDATE() 
	  then '0'

	  when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) <= CURDATE() 
	  then '1'  

	  end) as StatusProject
,(case 

	  when (SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1)  < CURDATE() 
	  then  '1'
 	   else '0'

	  end) as IsOverDue
 



from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0
)a where Progress != 0




