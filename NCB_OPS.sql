create or replace PACKAGE BODY             "PCK_DATA_REPORT" 
AS
PROCEDURE PR_GET_PCB_XXXSJF (P_REPORT_MONTH NVARCHAR2, p_out OUT SYS_REFCURSOR)
AS
V_REPORT_DATE VARCHAR2(80);

BEGIN

/*
H 314 31032020 05032020 VIB

Q 314 31032020 05032020 0000200
*/
SELECT MAX(REPORT_DATE) INTO V_REPORT_DATE FROM PCB_CA_NHAN WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;

        OPEN p_out FOR
            SELECT 'H314'|| V_REPORT_DATE ||''|| TO_CHAR(SYSDATE,'DDMMYYYY') ||'VIB' DATA FROM DUAL
            UNION ALL
            SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                    FORMAT_DATA(MA_NH,3) ||
                    FORMAT_DATA(MA_CN,8) ||
                    FORMAT_DATA(MA_KH_VAY_TAI_NH,16) ||
                    FORMAT_DATA(HO_TEN_KH,100) ||
                    FORMAT_DATA(GIOI_TINH,1) ||
                    FORMAT_NGAY_SINH(NGAY_SINH) ||
                    FORMAT_DATA(NOI_SINH,20) ||
                    FORMAT_DATA(MA_QG_NOI_SINH,2) ||
                    FORMAT_DATA(SO_CMND,12) ||
                    FORMAT_DATA(MS_THUE,10) ||
                    FORMAT_DATA(DIA_CHI_THUONG_TRU,160) ||
                    FORMAT_DATA(DIA_CHI_TAM_CHU,160) ||
                    FORMAT_DATA(LOAI_GTCN,1) ||
                    FORMAT_DATA(SO_GTCN,20) ||
                    FORMAT_DATA(NGAY_CAP_GTCN,8) ||
                    FORMAT_DATA(MA_QG_CAP_GTCN,2) ||
                    FORMAT_DATA(DIEN_THOAI,20) ||
                    FORMAT_DATA(SO_CMND_2,12) DATA
              FROM PCB_CA_NHAN
              WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH
              UNION ALL
              SELECT 'Q314'|| V_REPORT_DATE ||''|| TO_CHAR(SYSDATE,'DDMMYYYY') DATA FROM DUAL
              ;
EXCEPTION
    WHEN ZERO_DIVIDE
    THEN
        DBMS_OUTPUT.PUT_LINE ('Attempt to divide by 0');
END PR_GET_PCB_XXXSJF;

PROCEDURE PR_GET_PCB_XXXCNF (P_REPORT_MONTH NVARCHAR2,P_DATA_TYPE NVARCHAR2, p_out OUT SYS_REFCURSOR)
AS
V_REPORT_DATE VARCHAR2(80);

BEGIN

/*
H 314 31032020 05032020 VIB

Q 314 31032020 05032020 0000200
*/
SELECT MAX(REPORT_DATE) INTO V_REPORT_DATE FROM PCB_CA_NHAN WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;

IF P_DATA_TYPE='PCB_START' THEN
        OPEN p_out FOR
            SELECT 'H314'|| V_REPORT_DATE ||''|| TO_CHAR(SYSDATE,'DDMMYYYY') ||'VIB' DATA FROM DUAL;
END IF;
IF P_DATA_TYPE='PCB_THE_TIN_DUNG' THEN
        OPEN p_out FOR
            SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                    FORMAT_DATA(MA_NH,3) ||
                    FORMAT_DATA(MA_CN,8) ||
                    FORMAT_DATA(MA_KH_VAY_NH,16) ||
                    FORMAT_DATA(MA_HD_VAY_NH,35) ||
                    FORMAT_DATA(LOAI_HD,2) ||
                    FORMAT_DATA(GIAI_DOAN_HD,2) ||
                    FORMAT_DATA(TINH_TRANG_NO,1) ||
                    FORMAT_DATA(MA_TIEN_TE,3) ||
                    FORMAT_DATA(MA_TIEN_NGUYEN_TE,3) ||
                    FORMAT_DATA(NGAY_BAT_DAU_HD,8) ||
                    FORMAT_DATA(NGAY_YC_CAP_TIN_DUNG,8) ||
                    FORMAT_DATA(NGAY_HET_HAN_HD_KE_HOACH,8) ||
                    FORMAT_DATA(NGAY_HET_HAN_HD_THUC_TE,8) ||
                    FORMAT_DATA(NGAY_THANH_TOAN_LAN_CUOI_CUNG,8) ||
                    FORMAT_DATA(DANH_DAU_TD_TAI_CO_CAU,1) ||
                    FORMAT_ROWNUM(TIEN_BAO_DAM_KHONG_SD_TAI_SAN,12) ||
                    FORMAT_ROWNUM(TIEN_BAO_DAM_SD_TAI_SAN,12) ||
                    FORMAT_ROWNUM(SO_KY_NO_QUA_HAN_MAX,1) ||
                    FORMAT_ROWNUM(SO_THAG_CO_SO_KY_NO_QUA_HAN_MX,1) ||
                    FORMAT_ROWNUM(SO_NGAY_TRA_CHAM_MAX,3) ||
                    FORMAT_DATA(NHOM_NO_XAU_NHAT,1) ||
                    FORMAT_DATA(NGAY_CUOI_CO_NHOM_NO_XAU_NHAT,8) ||
                    FORMAT_DATA(' ',97) ||--Truong trang
                    FORMAT_DATA(CHU_KY_THANH_TOAN,1) ||
                    FORMAT_DATA(PHUONG_TIEN_THANH_TOAN,3) ||
                    FORMAT_ROWNUM(SO_TIEN_TRA_HANG_THANG,12) ||
                    FORMAT_ROWNUM(HAN_MUC_TIN_DUNG,12) ||
                    FORMAT_DATA(NGAY_THANH_TOAN_KE_TIEP,8) ||
                    FORMAT_ROWNUM(SO_TIEN_CON_NO,12) ||
                    FORMAT_ROWNUM(SO_KY_NO_QUA_HAN,3) ||
                    FORMAT_ROWNUM(SO_TIEN_NO_QUA_HAN,12) ||
                    FORMAT_ROWNUM(NGAY_SU_DUNG_GAN_NHAT,8) ||
                    FORMAT_DATA(HINH_THUC_TRA,1) ||
                    FORMAT_ROWNUM(SO_TIEN_DA_SD_TRONG_THANG,12) ||
                    FORMAT_DATA(THE_DUOC_SD_TRONG_THANG,1) ||
                    FORMAT_ROWNUM(SO_LAN_SD_TRONG_THANG,2) ||
                    FORMAT_ROWNUM(SO_NGAY_NO_QUA_HAN,3)  DATA
              FROM PCB_THE_TIN_DUNG  WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_VAY_THONG_THUONG' THEN
        OPEN p_out FOR
              SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                      FORMAT_DATA(MA_NH,3) ||
                      FORMAT_DATA(MA_CN,8) ||
                      FORMAT_DATA(MA_KH_VAY_NH,16) ||
                      FORMAT_DATA(MA_HD_VAY_NH,35) ||
                      FORMAT_DATA(LOAI_HD,2) ||
                      FORMAT_DATA(GIAI_DOAN_HD,2) ||
                      FORMAT_DATA(TINH_TRANG_NO,1) ||
                      FORMAT_DATA(MA_TIEN_TE,3) ||
                      FORMAT_DATA(MA_TIEN_NGUYEN_TE,3) ||
                      FORMAT_DATA(NGAY_BAT_DAU_HD,8) ||
                      FORMAT_DATA(NGAY_YC_CAP_TIN_DUNG,8) ||
                      FORMAT_DATA(NGAY_HET_HAN_HD_KE_HOACH,8) ||
                      FORMAT_DATA(NGAY_HET_HAN_HD_THUC_TE,8) ||
                      FORMAT_DATA(NGAY_THANH_TOAN_LAN_CUOI_CUNG,8) ||
                      FORMAT_DATA(DANH_DAU_TD_TAI_CO_CAU,1) ||
                      FORMAT_ROWNUM(TIEN_BAO_DAM_KHONG_SD_TAI_SAN,12) ||
                      FORMAT_ROWNUM(TIEN_BAO_DAM_SD_TAI_SAN,12) ||
                      FORMAT_ROWNUM(SO_KY_NO_QUA_HAN_MAX,1) ||
                      FORMAT_ROWNUM(SO_THAG_CO_SO_KY_NO_QUA_HAN_MX,1) ||
                      FORMAT_ROWNUM(SO_NGAY_TRA_CHAM_MAX,3) ||
                      FORMAT_ROWNUM(NHOM_NO_XAU_NHAT,1) ||
                      FORMAT_DATA(NGAY_CUOI_CO_NHOM_NO_XAU_NHAT,8) ||
                      FORMAT_DATA(' ',97) ||--Truong trang
                      FORMAT_ROWNUM(TONG_SO_TIEN_VAY,12) ||
                      FORMAT_ROWNUM(SO_KY_THANH_TOAN,3) ||
                      FORMAT_DATA(CHU_KY_THANH_TOAN,1) ||
                      FORMAT_DATA(PHUONG_TIEN_THANH_TOAN,3) ||
                      FORMAT_ROWNUM(SO_TIEN_TRA_HANG_THANG,12) ||
                      FORMAT_DATA(NGAY_THANH_TOAN_KE_TIEP,8) ||
                      FORMAT_ROWNUM(SO_TIEN_THANH_TOAN_KE_TIEP,12) ||
                      FORMAT_ROWNUM(SO_KY_TRA_GOP_CON_LAI,3) ||
                      FORMAT_ROWNUM(SO_TIEN_CON_NO,12) ||
                      FORMAT_ROWNUM(SO_LAN_NO_QUA_HAN,3) ||
                      FORMAT_ROWNUM(SO_TIEN_NO_QUA_HAN,12) ||
                      FORMAT_ROWNUM(SO_NGAY_NO_QUA_HAN,3) ||
                      FORMAT_DATA(LOAI_TAI_SAN_THUE,1) ||
                      FORMAT_DATA(GIA_TRI_TAI_SAN,12) ||
                      FORMAT_DATA(MOI_CU,1) ||
                      FORMAT_DATA(NHAN_HIEU_TAI_SAN,40) ||
                      FORMAT_DATA(SO_DK,40) ||
                      FORMAT_DATA(NGAY_SX,8) DATA
              FROM PCB_VAY_THONG_THUONG WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_VAY_THAU_CHI' THEN
        OPEN p_out FOR
              SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                    FORMAT_DATA(MA_NH,3) ||
                    FORMAT_DATA(MA_CN,8) ||
                    FORMAT_DATA(MA_KH_VAY_NH,16) ||
                    FORMAT_DATA(MA_HD_VAY_NH,35) ||
                    FORMAT_DATA(LOAI_HD,2) ||
                    FORMAT_DATA(GIAI_DOAN_HD,2) ||
                    FORMAT_DATA(TINH_TRANG_NO,1) ||
                    FORMAT_DATA(MA_TIEN_TE,3) ||
                    FORMAT_DATA(MA_TIEN_NGUYEN_TE,3) ||
                    FORMAT_DATA(NGAY_BAT_DAU_HD,8) ||
                    FORMAT_DATA(NGAY_YC_CAP_TIN_DUNG,8) ||
                    FORMAT_DATA(NGAY_HET_HAN_HD_KE_HOACH,8) ||
                    FORMAT_DATA(NGAY_HET_HAN_HD_THUC_TE,8) ||
                    FORMAT_DATA(NGAY_THANH_TOAN_LAN_CUOI_CUNG,8) ||
                    FORMAT_DATA(DANH_DAU_TD_TAI_CO_CAU,1) ||
                    FORMAT_ROWNUM(TIEN_BAO_DAM_KHONG_SD_TAI_SAN,12) ||
                    FORMAT_ROWNUM(TIEN_BAO_DAM_SD_TAI_SAN,12) ||
                    FORMAT_ROWNUM(SO_KY_NO_QUA_HAN_MAX,1) ||
                    FORMAT_ROWNUM(SO_THAG_CO_SO_KY_NO_QUA_HAN_MX,1) ||
                    FORMAT_ROWNUM(SO_NGAY_TRA_CHAM_MAX,3) ||
                    FORMAT_DATA(NHOM_NO_XAU_NHAT,1) ||
                    FORMAT_DATA(NGAY_CUOI_CO_NHOM_NO_XAU_NHAT,8) ||
                    FORMAT_DATA(' ',97) ||--Truong trang
                    FORMAT_ROWNUM(HAN_MUC_TIN_DUNG,12) ||
                    FORMAT_ROWNUM(LUONG_SU_DUNG,12) ||
                    FORMAT_ROWNUM(SO_NGAY_NO_QUA_HAN,3) DATA
              FROM PCB_VAY_THAU_CHI WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_LIEN_KET_HD' THEN
        OPEN p_out FOR
              SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                    FORMAT_DATA(MA_NH,3) ||
                    FORMAT_DATA(MA_CN,8) ||
                    FORMAT_DATA(LOAI_LIEN_KET,1) ||
                    FORMAT_DATA(MA_KH_VAY,16) ||
                    FORMAT_DATA(MA_NGUOI_DONG_VAY_BAO_LANH,16) ||
                    FORMAT_DATA(MA_HD_VAY_NH,35) ||
                    FORMAT_DATA(CO_XOA_LIEN_KET,1) DATA
              FROM PCB_LIEN_KET_HD WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_BD_TAI_SAN' THEN
        OPEN p_out FOR 
              SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                      FORMAT_DATA(MA_NH,3) ||
                      FORMAT_DATA(MA_CN,8) ||
                      FORMAT_DATA(MA_HD_VAY_NH,35) ||
                      FORMAT_DATA(MA_NGUOI_BAO_LANH_NH,16) ||
                      FORMAT_DATA(MA_BD_TIEN_VAY_NH,16) ||
                      FORMAT_DATA(HINH_THUC_BD,3) ||
                      FORMAT_ROWNUM(SO_TIEN_BD,12) ||
                      FORMAT_DATA(MO_TA_NGUOI_BAO_LANH,160) ||
                      FORMAT_DATA(SO_DANG_KY,20) ||
                      FORMAT_DATA(MO_TA_TAI_SAN,160) ||
                      FORMAT_DATA(' ',46) ||--Truong trang
                      FORMAT_DATA(NGAY_THE_CHAP,8) ||
                      FORMAT_DATA(NGAY_GIAI_CHAP,8) DATA
              FROM PCB_BD_TAI_SAN WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_BD_KHONG_TAI_SAN' THEN
        OPEN p_out FOR 
              SELECT FORMAT_DATA(LOAI_BAN_GHI,1) ||
                    FORMAT_DATA(MA_NH,3) ||
                    FORMAT_DATA(MA_CN,8) ||
                    FORMAT_DATA(MA_HD_VAY_NH,35) ||
                    FORMAT_DATA(MA_NGUOI_BAO_LANH_NH,16) ||
                    FORMAT_DATA(MA_BD_TIEN_VAY_NH,16) ||
                    FORMAT_DATA(HINH_THUC_BD,3) ||
                    FORMAT_ROWNUM(SO_TIEN_BD,12) ||
                    FORMAT_DATA(MO_TA_NGUOI_BAO_LANH,160) ||
                    FORMAT_DATA(' ',46) ||--Truong trang
                    FORMAT_DATA(KIEU_KH_VAY,20) ||
                    FORMAT_DATA(NGAY_BAT_DAU,160) ||
                    FORMAT_DATA(NGAY_CHAM_DUT,8) DATA
              FROM PCB_BD_KHONG_TAI_SAN WHERE SUBSTR(REPORT_DATE,3,6) = P_REPORT_MONTH;
END IF;
IF P_DATA_TYPE='PCB_END' THEN
        OPEN p_out FOR 
              SELECT 'Q314'|| V_REPORT_DATE ||''|| TO_CHAR(SYSDATE,'DDMMYYYY') DATA FROM DUAL;
END IF;
EXCEPTION
    WHEN ZERO_DIVIDE
    THEN
        DBMS_OUTPUT.PUT_LINE ('Attempt to divide by 0');
END PR_GET_PCB_XXXCNF;

FUNCTION FORMAT_DATA(P_STR IN VARCHAR2,P_LENGTH IN INT) RETURN VARCHAR2
IS
  V_RESULT VARCHAR2(4000);
BEGIN

SELECT  RPAD(NVL(P_STR,' '), P_LENGTH, ' ') INTO V_RESULT
FROM    dual;

  RETURN V_RESULT;
END;

FUNCTION FORMAT_ROWNUM(P_STR IN VARCHAR2,P_LENGTH IN INT) RETURN VARCHAR2
IS
  V_RESULT VARCHAR2(4000);
BEGIN

SELECT  LPAD(NVL(P_STR,'0'), P_LENGTH, '0') INTO V_RESULT
FROM    dual;

  RETURN V_RESULT;
END;

FUNCTION FORMAT_NGAY_SINH(P_STR IN VARCHAR2) RETURN VARCHAR2
IS
  V_RESULT VARCHAR2(50);
BEGIN

SELECT  case when length(P_STR)=4 then '0000'||P_STR
             when length(P_STR)=8 then P_STR
             else '00000000' end INTO V_RESULT
FROM    dual;

  RETURN V_RESULT;
END;

/*
Description: Th?c hi?n kh?i t?o file m?i cho kꮨ PCB
*/
PROCEDURE PR_NEW_REPORT_FILE_PCB (P_REPORT_MONTH NVARCHAR2,
                                  P_USER NVARCHAR2)
AS
V_CHECK_EXISTS INT;

BEGIN
/*
CREATED  ?㠴?o xong d? li?u
REVIEWING  - ?ang xem x鴠d? li?u: Sau khi ETL xong.
REJECTED  - D? li?u c?n ki?m tra l?i: Tr?ng th᩠sau khi t? ch?i duy?t file.
APPROVED  - D? li?u ???c xᣠnh?n: Tr?ng th᩠sau khi duy?t file.
SENDING  - File ?ang g?i: Tr?ng th᩠?ang g?i file sang CIC sau khi duy?t file.
SENT  - File g?i thந c𮧺 Tr?ng th᩠sau khi g?i file sang CIC thந c𮧮
SEND_ERROR  - File g?i b? l?i: Tr?ng th᩠sau khi g?i file sang CIC b? l?i.
CIC_ERROR  - CIC x? lý c󠬿i: Tr?ng th᩠CIC g?i v? c󠬿i.
*/

  --KIEM TRA KY BAO CAO DA TON TAI
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL='PCB' AND REPORT_MONTH=P_REPORT_MONTH AND FILE_STATUS<>'REJECTED';
  IF V_CHECK_EXISTS>0 THEN
    raise_application_error( -20000, 'REPORT MONTH EXISTS!' );
  END IF;

  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL='PCB' AND REPORT_MONTH=P_REPORT_MONTH AND FILE_STATUS='REJECTED';
  IF V_CHECK_EXISTS>0 THEN
    UPDATE LOG_REPORT_FILE A SET FILE_STATUS='CREATED', CREATED_DATE = SYSDATE, CREATED_USER = P_USER
    WHERE A.CHANNEL='PCB' AND REPORT_MONTH=P_REPORT_MONTH AND FILE_STATUS='REJECTED';
    RETURN;
  END IF;

  INSERT INTO LOG_REPORT_FILE (CHANNEL, CREATED_DATE, CREATED_USER, FILE_STATUS, REPORT_MONTH, FILE_NAME, REPORT_PERIOD, FILE_TYPE)
  VALUES ('PCB', SYSDATE, P_USER,'CREATED', P_REPORT_MONTH, 'N/A', P_REPORT_MONTH, 'ZIP');
  COMMIT;
END;

PROCEDURE PR_NEW_REPORT_FILE_CIC (p_report_month nvarchar2, 
                                p_user nvarchar2,
                                p_check_sum_md5 nvarchar2,
                                p_error_code nvarchar2,
                                p_error_msg nvarchar2,
                                p_file_name nvarchar2,
                                p_file_path nvarchar2,
                                p_file_size number , 
                                p_file_type nvarchar2,
                                p_file_path_encode nvarchar2, 
                                p_report_period nvarchar2,
                                p_file_status nvarchar2,
                                p_channel  nvarchar2,
                                p_out out sys_refcursor)
AS
V_CHECK_EXISTS INT;
V_AUTO_APPROVAL nvarchar2(50);
BEGIN
/*
CREATED  ?㠴?o xong d? li?u
REVIEWING  - ?ang xem x鴠d? li?u: Sau khi ETL xong.
REJECTED  - D? li?u c?n ki?m tra l?i: Tr?ng th᩠sau khi t? ch?i duy?t file.
APPROVED  - D? li?u ???c xᣠnh?n: Tr?ng th᩠sau khi duy?t file.
SENDING  - File ?ang g?i: Tr?ng th᩠?ang g?i file sang CIC sau khi duy?t file.
SENT  - File g?i thந c𮧺 Tr?ng th᩠sau khi g?i file sang CIC thந c𮧮
SEND_ERROR  - File g?i b? l?i: Tr?ng th᩠sau khi g?i file sang CIC b? l?i.
CIC_ERROR  - CIC x? lý c󠬿i: Tr?ng th᩠CIC g?i v? c󠬿i.
*/

  --KIEM TRA KY BAO CAO DA TON TAI
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL IN ('CIC','CICU') AND FILE_NAME=P_FILE_NAME AND FILE_STATUS<>'REJECTED';
  IF V_CHECK_EXISTS>0 THEN
    raise_application_error( -20000, 'FILE NAME EXISTS!' );
  END IF;

  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL IN ('CIC','CICU') AND FILE_NAME=P_FILE_NAME AND FILE_STATUS='REJECTED';
  IF V_CHECK_EXISTS>0 THEN
    UPDATE LOG_REPORT_FILE A 
    SET FILE_STATUS='CREATED'
        ,CREATED_DATE = SYSDATE
        ,CREATED_USER = P_USER
        ,REPORT_MONTH=SUBSTR(P_FILE_NAME,length(P_FILE_NAME)-9,6)
        ,REPORT_PERIOD=SUBSTR(P_FILE_NAME,length(P_FILE_NAME)-9,6)
    WHERE A.CHANNEL IN ('CIC','CICU') AND FILE_NAME=P_FILE_NAME AND FILE_STATUS='REJECTED';
    PKG_SYS_EMAIL.PR_SEND_EMAIL_NEW_FILE(P_FILE_NAME, 'CIC', 'CREATED');
    RETURN;
  END IF;

  SELECT NVL(MAX(PAR1),'FALSE') INTO V_AUTO_APPROVAL
  FROM SYS_REFCODE
  WHERE REF_CODE='AUTO_APPROVAL_SEND_FILE' AND REF_GROUP='SYSTEM';

  INSERT INTO LOG_REPORT_FILE (CHANNEL
                               , CREATED_DATE
                               , CREATED_USER
                               , FILE_STATUS
                               , FILE_NAME
                               , FILE_TYPE
                               ,REPORT_MONTH
                               ,REPORT_PERIOD
                               ,file_path
                               ,file_size
                               ,check_sum_md5
                               ,file_path_encode
                               ,CIC_STATUS)
  VALUES (P_CHANNEL
          , SYSDATE
          , P_USER
          ,CASE WHEN P_CHANNEL = 'PCB' then 
             TO_CHAR(p_FILE_STATUS) else case when V_AUTO_APPROVAL='TRUE' THEN 'APPROVED' ELSE TO_CHAR(p_FILE_STATUS) 
            END end 
          , P_FILE_NAME
          , P_FILE_TYPE
          ,p_report_month
          ,p_report_period
          ,p_file_path
          ,p_file_size
          ,p_check_sum_md5
          ,p_file_path_encode
          ,'0' -- M?c ??nh lࠃIC ch?a x? lý
          );

OPEN p_out FOR 
select * from LOG_REPORT_FILE
WHERE CHANNEL IN ('CIC','CICU') AND FILE_NAME=P_FILE_NAME;

  PKG_SYS_EMAIL.PR_SEND_EMAIL_NEW_FILE(P_FILE_NAME, 'CIC', 'CREATED');
  COMMIT;
END;


/*
Description: Th?c hi?n c?p nh?t tr?ng th᩠file sau khi ???c kh?i t?o
*/
PROCEDURE PR_CREATED_FILE_PCB (P_REPORT_MONTH NVARCHAR2, 
                                P_USER NVARCHAR2,
                                P_CHECK_SUM_MD5 NVARCHAR2,
                                P_ERROR_CODE NVARCHAR2,
                                P_ERROR_MSG NVARCHAR2,
                                P_FILE_NAME NVARCHAR2,
                                P_FILE_PATH NVARCHAR2,
                                P_FILE_SIZE NUMBER , 
                                P_FILE_TYPE NVARCHAR2,
                                P_FILE_PATH_ENCODE NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN

  --KIEM TRA KY BAO CAO DA TON TAI V?I TR?NG THÁI CREATED HAY KHԎG
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL='PCB' AND REPORT_MONTH=P_REPORT_MONTH AND FILE_STATUS='CREATED';
  IF V_CHECK_EXISTS=0 THEN
    raise_application_error( -20000, 'REPORT MONTH DOESN''T  EXISTS!' );
  END IF;

  UPDATE LOG_REPORT_FILE A
  SET CHECK_SUM_MD5 = P_CHECK_SUM_MD5,
      ERROR_CODE = P_ERROR_CODE,
      ERROR_MSG = P_ERROR_MSG,
      FILE_NAME = P_FILE_NAME,
      FILE_PATH = P_FILE_PATH,
      FILE_SIZE = P_FILE_SIZE,
      FILE_STATUS = 'REVIEWING',
      --FILE_TYPE = P_FILE_TYPE,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = P_USER,
      FILE_PATH_ENCODE = P_FILE_PATH_ENCODE
  WHERE A.CHANNEL='PCB' AND REPORT_MONTH=P_REPORT_MONTH AND FILE_STATUS='CREATED';

  OPEN p_out FOR
    SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE  A LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT'  WHERE A.CHANNEL='PCB' AND A.REPORT_MONTH=P_REPORT_MONTH;

  COMMIT;
END;

/*
Description: Th?c hi?n C?p nh?t file sau khi g?i sang PCB
*/
PROCEDURE PR_SEND_REPORT_FILE_PCB (P_REPORT_MONTH NVARCHAR2,
                                 P_FILE_STATUS VARCHAR2, 
                                 P_ERROR_CODE NVARCHAR2,
                                 P_ERROR_MSG NVARCHAR2,
                                 P_USER NVARCHAR2,
                                 p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN

  --KIEM TRA KY BAO CAO DA TON TAI V?I TR?NG THÁI APPROVED HAY KHԎG
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL='PCB' AND FILE_NAME=P_REPORT_MONTH  AND (FILE_STATUS='APPROVED' OR FILE_STATUS='SENDING');
  IF V_CHECK_EXISTS=0 THEN
    raise_application_error( -20000, 'REPORT MONTH DOESN''T  EXISTS!' );
  END IF;
  IF P_FILE_STATUS NOT IN ('SENDING','SENT','SEND_ERROR') THEN
    raise_application_error( -20000, 'FILE CAN CHANG ONLY TO SENDING, SENT, SEND_ERROR!' );
  END IF;

  UPDATE LOG_REPORT_FILE A
  SET ERROR_CODE = P_ERROR_CODE,
      ERROR_MSG = P_ERROR_MSG,
      FILE_STATUS = P_FILE_STATUS,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = P_USER,
      SENDED_DATE = SYSDATE
  WHERE A.CHANNEL='PCB' AND FILE_NAME=P_REPORT_MONTH AND (FILE_STATUS='APPROVED' OR FILE_STATUS='SENDING');

   OPEN p_out FOR
     SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE A
LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT' WHERE A.CHANNEL='PCB' AND A.FILE_NAME=P_REPORT_MONTH AND A.FILE_STATUS=P_FILE_STATUS;

  COMMIT;
END;
/*
Description: Th?c hi?n C?p nh?t file sau khi g?i sang PCB
*/
PROCEDURE PR_SEND_REPORT_FILE_CIC (P_FILE_NAME NVARCHAR2,
                                 P_FILE_STATUS VARCHAR2, 
                                 P_ERROR_CODE NVARCHAR2,
                                 P_ERROR_MSG NVARCHAR2,
                                 P_USER NVARCHAR2,
                                 p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN

  --KIEM TRA KY BAO CAO DA TON TAI V?I TR?NG THÁI APPROVED HAY KHԎG
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL IN ('CICU','CIC') AND FILE_NAME=P_FILE_NAME AND (FILE_STATUS='APPROVED' OR FILE_STATUS='SENDING');
  IF V_CHECK_EXISTS=0 THEN
    raise_application_error( -20000, 'REPORT MONTH DOESN''T  EXISTS!' );
  END IF;
  IF P_FILE_STATUS NOT IN ('SENDING','SENT','SEND_ERROR') THEN
    raise_application_error( -20000, 'FILE CAN CHANG ONLY TO SENDING, SENT, SEND_ERROR!' );
  END IF;

  UPDATE LOG_REPORT_FILE A
  SET ERROR_CODE = nvl(P_ERROR_CODE,ERROR_CODE),
      ERROR_MSG = nvl(P_ERROR_MSG,ERROR_MSG),
      FILE_STATUS = P_FILE_STATUS,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = nvl(P_USER,UPDATED_USER),
      SENDED_DATE = SYSDATE
  WHERE A.CHANNEL IN ('CICU','CIC') AND FILE_NAME=P_FILE_NAME AND (FILE_STATUS='APPROVED' OR FILE_STATUS='SENDING')
  AND (P_ERROR_MSG<>'Transport error: 401 Error: Unauthorized' OR P_ERROR_MSG IS NULL);

   OPEN p_out FOR
     SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE A
LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT' WHERE A.CHANNEL IN ('CICU','CIC') AND A.FILE_NAME=P_FILE_NAME AND A.FILE_STATUS=P_FILE_STATUS;

  COMMIT;
END;
/*
Desscription: T쭠ki?m danh sᣨ file
*/
PROCEDURE PR_SEARCH_DATA (P_KEYWORD NVARCHAR2,
                          P_FROM_DATE DATE,
                          P_TO_DATE DATE,
                          P_FILE_STATUS VARCHAR2,
                          p_channel VARCHAR2,
                          P_USER VARCHAR2,
                          p_file_name varchar2,
                          p_out OUT SYS_REFCURSOR)
AS
    V_GROUP_NAME VARCHAR2(1000);
    V_FILE_TYPE_LIST VARCHAR2(1000);
    V_KEYWORD VARCHAR2(1000);

BEGIN

SELECT ','|| listagg(','||NVL(GROUP_NAME,'')||',',', ') within group(order by GROUP_NAME) ||','
INTO V_GROUP_NAME
FROM SYS_USER A
WHERE A.USER_NAME = P_USER;

SELECT ','|| listagg(','||NVL(PAR3,'')||',',', ') within group(order by PAR3) ||','  
INTO V_FILE_TYPE_LIST
FROM SYS_GROUPS A
WHERE V_GROUP_NAME LIKE '%,'|| A.GROUP_NAME ||',%';

V_KEYWORD := lower(P_KEYWORD);

pkg_system_log.pr_log_info ('datnd15', 'value', V_KEYWORD || '-' ||P_FILE_STATUS || '-' ||p_channel|| '-' ||p_file_name ||'-'||V_FILE_TYPE_LIST);

OPEN p_out FOR
SELECT A.FILE_NAME,
        A.FILE_PATH,
        A.FILE_SIZE,
        A.FILE_STATUS,
        A.CREATED_USER,
        A.CHANNEL,
        A.FILE_TYPE,
        A.CHECK_SUM_MD5,
        A.REJECT_COMMENT,
        A.ERROR_CODE,
        A.ERROR_MSG,
        A.CREATED_DATE,
        A.SENDED_DATE,
        A.UPDATED_DATE,
        A.UPDATED_USER,
        A.REPORT_MONTH,
        A.REPORT_PERIOD,
        A.FILE_PATH_ENCODE,
        A.CIC_STATUS,
        NVL(C.REF_NAME_VN,'N/A') CIC_STATUS_NAME,
        --A.CIC_RESPONSE,
        A.CIC_UPDATE_DATE,
        B.REF_NAME_VN STATUS_NAME

FROM LOG_REPORT_FILE A
LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT'
LEFT JOIN SYS_REFCODE C ON A.CIC_STATUS=C.REF_CODE AND C.REF_GROUP='CIC_REPORT_STATUS'
WHERE lower(A.FILE_TYPE||','||A.FILE_NAME||','||A.CHANNEL||':'||A.REPORT_MONTH||','||A.CHANNEL||':'||A.FILE_NAME||',STS:'||A.FILE_STATUS) LIKE '%'||lower(V_KEYWORD)||'%'
        AND NVL(A.SENDED_DATE,A.CREATED_DATE) BETWEEN NVL(P_FROM_DATE,SYSDATE-100) AND NVL(P_TO_DATE,SYSDATE+100)+1
        AND (A.FILE_STATUS=P_FILE_STATUS OR P_FILE_STATUS IS NULL)
        AND (A.channel=p_channel OR p_channel IS NULL)
        and (file_name=p_file_name or p_file_name is null)
        AND (V_FILE_TYPE_LIST LIKE '%,'||A.FILE_TYPE||',%' OR V_KEYWORD like lower('PCB%') or V_KEYWORD like lower('STS%'))
order by a.created_date desc
;


EXCEPTION
    WHEN ZERO_DIVIDE
    THEN
        DBMS_OUTPUT.PUT_LINE ('Attempt to divide by 0');
END;

/*
Description: Th?c hi?n phꠤuy?t file PCB
*/
PROCEDURE PR_APPROVAL_FILE_PCB (P_REPORT_MONTH NVARCHAR2, P_FILE_STATUS VARCHAR2,  p_reject_comment VARCHAR2,P_USER NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN
/*
CREATED  ?㠴?o xong d? li?u
REVIEWING  - ?ang xem x鴠d? li?u: Sau khi ETL xong.
REJECTED  - D? li?u c?n ki?m tra l?i: Tr?ng th᩠sau khi t? ch?i duy?t file.
APPROVED  - D? li?u ???c xᣠnh?n: Tr?ng th᩠sau khi duy?t file.
SENDING  - File ?ang g?i: Tr?ng th᩠?ang g?i file sang CIC sau khi duy?t file.
SENT  - File g?i thந c𮧺 Tr?ng th᩠sau khi g?i file sang CIC thந c𮧮
SEND_ERROR  - File g?i b? l?i: Tr?ng th᩠sau khi g?i file sang CIC b? l?i.
CIC_ERROR  - CIC x? lý c󠬿i: Tr?ng th᩠CIC g?i v? c󠬿i.
*/

  --KIEM TRA KY BAO CAO DA TON TAI
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL='PCB' AND FILE_NAME=P_REPORT_MONTH AND FILE_STATUS = 'REVIEWING';
  IF V_CHECK_EXISTS=0 THEN
    raise_application_error( -20000, 'REPORT MONTH NOT EXISTS!' );
  END IF;
  IF P_FILE_STATUS NOT IN ('APPROVED','REJECTED') THEN
    raise_application_error( -20000, 'FILE CAN CHANG ONLY TO APPROVED, REJECTED!' );
  END IF;

  UPDATE LOG_REPORT_FILE A
  SET FILE_STATUS=P_FILE_STATUS,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = P_USER,
      reject_comment=p_reject_comment
  WHERE A.CHANNEL='PCB' AND FILE_NAME=P_REPORT_MONTH AND FILE_STATUS='REVIEWING';
   OPEN p_out FOR
    SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE  A
        LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT' 
    WHERE A.CHANNEL='PCB' AND A.FILE_NAME=P_REPORT_MONTH AND A.FILE_STATUS=P_FILE_STATUS;

  COMMIT;
END;
/*
Description: Th?c hi?n phꠤuy?t file CIC
*/
PROCEDURE PR_APPROVAL_FILE_CIC (P_REPORT_MONTH NVARCHAR2, P_FILE_STATUS VARCHAR2,  p_reject_comment VARCHAR2,P_USER NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN
/*
CREATED  ?㠴?o xong d? li?u
REVIEWING  - ?ang xem x鴠d? li?u: Sau khi ETL xong.
REJECTED  - D? li?u c?n ki?m tra l?i: Tr?ng th᩠sau khi t? ch?i duy?t file.
APPROVED  - D? li?u ???c xᣠnh?n: Tr?ng th᩠sau khi duy?t file.
SENDING  - File ?ang g?i: Tr?ng th᩠?ang g?i file sang CIC sau khi duy?t file.
SENT  - File g?i thந c𮧺 Tr?ng th᩠sau khi g?i file sang CIC thந c𮧮
SEND_ERROR  - File g?i b? l?i: Tr?ng th᩠sau khi g?i file sang CIC b? l?i.
CIC_ERROR  - CIC x? lý c󠬿i: Tr?ng th᩠CIC g?i v? c󠬿i.
*/

  --KIEM TRA KY BAO CAO DA TON TAI
  SELECT COUNT(9) INTO V_CHECK_EXISTS FROM LOG_REPORT_FILE A WHERE A.CHANNEL in ('CIC','CICU') AND FILE_NAME=P_REPORT_MONTH AND FILE_STATUS = 'REVIEWING';
  IF V_CHECK_EXISTS=0 THEN
    raise_application_error( -20000, 'FILE NAME NOT EXISTS! '|| P_REPORT_MONTH );
    return ;
  END IF;

  IF P_FILE_STATUS NOT IN ('APPROVED','REJECTED') THEN
    raise_application_error( -20000, 'FILE CAN CHANG ONLY TO APPROVED, REJECTED!' );
    return;
  END IF;

  IF P_FILE_STATUS='REJECTED' THEN
    PKG_SYS_EMAIL.PR_SEND_EMAIL_NEW_FILE(P_REPORT_MONTH, 'CIC', 'REJECTED');
  END IF;

  UPDATE LOG_REPORT_FILE A
  SET FILE_STATUS=P_FILE_STATUS,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = P_USER,
      reject_comment=p_reject_comment
  WHERE A.CHANNEL IN ('CIC','CICU') AND FILE_NAME=P_REPORT_MONTH AND FILE_STATUS='REVIEWING';

   OPEN p_out FOR
SELECT A.FILE_NAME,
        A.FILE_PATH,
        A.FILE_SIZE,
        A.FILE_STATUS,
        A.CREATED_USER,
        A.CHANNEL,
        A.FILE_TYPE,
        A.CHECK_SUM_MD5,
        A.REJECT_COMMENT,
        A.ERROR_CODE,
        A.ERROR_MSG,
        A.CREATED_DATE,
        A.SENDED_DATE,
        A.UPDATED_DATE,
        A.UPDATED_USER,
        A.REPORT_MONTH,
        A.REPORT_PERIOD,
        A.FILE_PATH_ENCODE,
        A.CIC_STATUS,
        NVL(C.REF_NAME_VN,'N/A') CIC_STATUS_NAME,
        --A.CIC_RESPONSE,
        A.CIC_UPDATE_DATE,
        B.REF_NAME_VN STATUS_NAME

FROM LOG_REPORT_FILE A
LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT'
LEFT JOIN SYS_REFCODE C ON A.CIC_STATUS=C.REF_CODE AND C.REF_GROUP='CIC_REPORT_STATUS'
WHERE A.CHANNEL IN ('CIC','CICU') AND A.FILE_NAME=P_REPORT_MONTH ;

  COMMIT;
END;

PROCEDURE PR_GET_CIC_DATA_REPORT_RAW (P_FILE_NAME NVARCHAR2, P_FILE_TYPE NVARCHAR2, p_out OUT SYS_REFCURSOR)
AS
--V_REPORT_DATE VARCHAR2(80);
BEGIN

IF P_FILE_TYPE='HEADER' THEN
  OPEN p_out FOR
  SELECT 'KB001|KB002|10000000' DATA
  FROM DUAL; 
END IF;
IF P_FILE_TYPE='SBV_BRANCH' THEN
  OPEN p_out FOR
  SELECT REF_CODE BR_CD, REF_NAME_VN DATA
  FROM SYS_REFCODE 
  WHERE REF_GROUP='LS_SBV_BRANCH'; 
END IF;

IF P_FILE_TYPE='K1021' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'|| CST_NM||'|'||GENDER
    ||'|'||chr(10)||'2|'||ADDRESS||'|'||PROV_CD||'|'||PHONE||'|'||CTY_CD
    ||'|'||chr(10)||'3|'||ID_NO||'|'||ID_NO_DT||'|'||TAX_NO||'|'||REG_NO||'|'||REG_DT
    ||'|'||chr(10)||'5|'||REP_ID_NO||'|'||REP_NM||'|' DATA
         , BR_CD, RPT_DT, CUSTOMER_KEY DATAKEY
  from cic_customer A WHERE FILE_NAME=P_FILE_NAME
  UNION ALL
  select '4'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY REG_NO)))||'|'||REG_NO||'|'||REG_DT||'|' DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from Cic_Customer_Entity A WHERE FILE_NAME=P_FILE_NAME
  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K1011' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'|| CST_NM||'|'||FULL_NM||'|'||SORT_NM
    ||'|'||chr(10)||'2|'||ADDRESS||'|'||PROV_CD 
    ||'|'||chr(10)||'3|'||PHONE||'|'||FAX||'|'||WEB||'|'||EMAIL
    ||'|'||chr(10)||'4|'||TAX_NO||'|'||TAX_DT||'|'||DEC_NO||'|'||DEC_DT
    ||'|'||chr(10)||'5|'||REG_NO||'|'||REG_DT||'|'||COM_TP||'|'||COM_BUS_TP
    ||'|'||chr(10)||'6|'||COM_CPTL||'|'||COM_TP_CD||'|'||SPS_NM||'|'||SPS_ID_NO
    ||'|'||chr(10)||'8|'||DIR_NM||'|'||DIR_ID_NO||'|'DATA
         , BR_CD, RPT_DT, CUSTOMER_KEY DATAKEY
  from cic_customer A WHERE FILE_NAME=P_FILE_NAME
  UNION ALL
  select '7'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY B.SHRHLR_ID_NO)))
         ||'|'||SHRHLR_NM||'|'||B.SHRHLR_ADDR||'|'||SHRHLR_ID_NO||'|' DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from CIC_CUSTOMER_DIRECTOR B WHERE FILE_NAME=P_FILE_NAME
  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K113' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'|| CST_NM
    ||'|'||chr(10)||'2|'||ADDRESS||'|'||PROV_CD||'|'||WORK_ADDRESS||'|'||JOB_TITLE||'|'||SENIORITY||'|'||AGG_SALARY
    ||'|'||chr(10)||'3|'||PHONE||'|'||CTY_CD||'|'||GENDER||'|'||DOB||'|'||ID_NO||'|'||ID_NO_DT||'|'||TAX_NO||'|'||REP_NM||'|'||REP_ID_NO
         ||'|'DATA
         , BR_CD, RPT_DT, CUSTOMER_KEY DATAKEY
  from cic_customer A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '4'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY REG_NO)))||'|'||REG_NO||'|'||REG_DT||'|' DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from Cic_Customer_Entity B WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '5'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY CST_CD)))||'|'||SUB_CST_NM||'|'||SUB_CST_ID_NO||'|' DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from CIC_CUSTOMER_SUB_CREDIT_CARD A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '6'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY CST_CD)))||'|'||CLT_CD||'|'||CLT_GROUP_CD||'|'||CLT_OWN||'|'||OWN_ID_NO||'|'||OWN_TAX_NO||'|'||OPEN_DT||'|'||CLOSE_DT||'|'||AMT||'|'||AMT_DT
         ||'|'||chr(10)||'7'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY CST_CD)))||'|'||CLT_DES||'|' DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from CIC_COLLATERAL A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K3111' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'||CST_NM||'|'||CTR_NO||'|'||SIGN_OFF_DT||'|'||EXPIRE_DT||'|'||LIMIT_AMT
         ||'|'DATA
         , BR_CD, RPT_DT, LOAN_CONTRACT_KEY DATAKEY
  from CIC_LOAN_CONTRACT A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '2'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_LOAN_CONTRACT_KEY ORDER BY ACCT_NO)))||'|'||ACCT_NO||'|'||
            AC_DT||'|'||INTERSET_RATE||'|'||LN_PP||'|'||LN_TP||'|'||CCY||'|'||DISBURSED_AMT||'|'||PAID_AMT||'|'||BAL||'|'||DEBT_GROUP||'|'||
            NEXT_PAY_DT||'|'||NEXT_PAY_AMT||'|'||PAST_OVERDUE_NUM||'|'||PAST_OVERDUE_BAL||'|'||DEBT_EXN_NUM||'|'||DEBT_EXN_AMT
         ||'|' DATA 
         , BR_CD, RPT_DT, FK_LOAN_CONTRACT_KEY
  from CIC_LOAN_ACCOUNT A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K3113' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'||CST_NM||'|'||CTR_NO||'|'||CLT_STATUS
         ||'|'DATA
         , BR_CD, RPT_DT, LOAN_CONTRACT_KEY DATAKEY
  from CIC_LOAN_CONTRACT A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '2'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_LOAN_CONTRACT_KEY ORDER BY ACCT_NO)))||'|'||ACCT_NO||'|'||
            LN_TP||'|'||CCY||'|'||BAL||'|'||DEBT_GROUP
         ||'|' DATA 
         , BR_CD, RPT_DT, FK_LOAN_CONTRACT_KEY
  from CIC_LOAN_ACCOUNT A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K3213' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'||CST_NM||'|'||RPT_DT||'|'||
         chr(10)||'3|'||DNA06||'|'||DNA07||'|'||DNA08||'|'||
         chr(10)||'6|'||DNB10||'|'||DNB11||'|'||DNB12||'|'||DNB13||'|'
         DATA
         , BR_CD, RPT_DT, A.BALANCE_KEY DATAKEY
  from CIC_BALANCE A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select CASE WHEN BAL_TP='DNA05'  THEN '2'||LN_TP||CCY||DEPT_GROUP||'|'||BAL||'|' 
              WHEN BAL_TP='DNA091' THEN '4'||CCY||'|'||BAL||'|'
              WHEN BAL_TP='DNA092' THEN '5'||CCY||DEPT_GROUP||'|'||BAL||'|'
         END DATA
         , BR_CD, RPT_DT, FK_BALANCE_KEY
  from CIC_BALANCE_DETAIL A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K3331' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'||CC_NM||'|'||CTR_NO||'|'||CC_AMT||'|'
         DATA
         , BR_CD, RPT_DT, A.CREDIT_CARD_KEY DATAKEY
  from CIC_CREDIT_CARD A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '2'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY CREDIT_CARD_KEY,CC_NO ORDER BY CTR_NO)))||'|'
         ||CC_TP_CD||'|'||OPEN_DT||'|'||END_DT||'|'||CLOSE_DT||'|'||STATE_DT||'|'||PAY_AMT||'|'||MIN_AMT
         ||'|'||PAID_AMT||'|'||OVER_AMT||'|'||OVER_DAYS||'|'||OVER_NO
         ||'|' DATA 
         , BR_CD, RPT_DT, CREDIT_CARD_KEY
  from CIC_CREDIT_CARD A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K4' THEN 
  OPEN p_out FOR
  select * from (
  select '1|'||CST_CD||'|'||CST_NM||'|'||ADD_WORK||'|'||JOB_TITLE||'|'||SENIORITY||'|'||AGG_SALARY
         ||'|'DATA
         , BR_CD, RPT_DT, A.COLLATERAL_KEY DATAKEY
  FROM CIC_COLLATERAL A WHERE FILE_NAME=P_FILE_NAME AND CLT_TP='TIN_CHAP'

  UNION ALL
  select '2'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY,CLT_TP ORDER BY CLT_CD)))||'|'||CLT_CD||'|'||CLT_GROUP_CD||'|'||CLT_OWN||'|'||OWN_ID_NO||'|'||
          OWN_TAX_NO||'|'||OPEN_DT||'|'||CLOSE_DT||'|'||AMT||'|'||AMT_DT||'|'||
          chr(10)||'3'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY FK_CUSTOMER_KEY ORDER BY CST_CD)))||'|'||CLT_DES||'|'

          DATA 
         , BR_CD, RPT_DT, FK_CUSTOMER_KEY
  from CIC_COLLATERAL A WHERE FILE_NAME=P_FILE_NAME AND CLT_TP='THE_CHAP'

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K2' THEN --TODO: CHECK L?I XEM PH?N N? пU N? CU?I TH? HI?N TH? NÀO
  OPEN p_out FOR
  select * from (
  select DISTINCT '1|'||CST_CD||'|'||CST_NM||'|'||
                 chr(10)||'2|'||FIN_YEAR||'|'||UNIT||'|'||
                 chr(10)||'3|'||CCY_CD||'|'||IS_AUDIT||'|'||
                 chr(10)||'4|'||IS_CONSOLIDATED||'|'DATA
         , BR_CD, RPT_DT, A.FINANCIAL_KEY DATAKEY
  FROM CIC_FINANCIAL A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select ITEM_CD||'|'||OPEN_BAL||'|' DATA
         , BR_CD, RPT_DT, A.FINANCIAL_KEY DATAKEY
  FROM CIC_FINANCIAL A WHERE FILE_NAME=P_FILE_NAME


  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='K5' THEN 
  OPEN p_out FOR
  select * from (
  select DISTINCT '1|'||CST_CD||'|'||CST_NM||'|' DATA
         , BR_CD, RPT_DT, A.BOND_INVESTMENT_KEY DATAKEY
  FROM CIC_BOND_INVESTMENT A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select '2'||rpad('0',2,(ROW_NUMBER()OVER (PARTITION BY BOND_INVESTMENT_KEY ORDER BY BOND_DT)))||'|'||CTR_NO||'|'||
          BOND_DT||'|'||BOND_RATE||'|'||BOND_NUM||'|'||MATURITY_DT||'|'||BOND_AMT||'|'||CCY||'|'||BOND_PPS||'|'||TP012||'|'||TP013||'|' DATA 
         , BR_CD, RPT_DT, BOND_INVESTMENT_KEY
  from CIC_BOND_INVESTMENT A WHERE FILE_NAME=P_FILE_NAME
  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='T02DS' THEN 
  OPEN p_out FOR
  select * from (
  select DISTINCT '1|'||CST_CD||'|'||CST_NM||'|'||CST_ID_NO||'|'||CST_REG_NO||'|'||CST_TAX_NO||'|' DATA
         , MBR_CD BR_CD, RPT_DT, A.TT02DS_KEY DATAKEY
  FROM CIC_TT02DS A WHERE FILE_NAME=P_FILE_NAME

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;

IF P_FILE_TYPE='T02G1' THEN 
  OPEN p_out FOR
  select * from (
  select DISTINCT '1|'||CST_CD||'|' DATA
         , MBR_CD BR_CD, RPT_DT, A.TT02G_KEY DATAKEY
  FROM CIC_TT02G A WHERE FILE_NAME=P_FILE_NAME AND FILE_TP='G1'

  UNION ALL
  select CASE WHEN AABBCC='AABBCC' THEN '2'||LN_TP_CD||CCY||DEBT_CD||'|'||BAL||'|'||CL_CD||'|'
              WHEN AABBCC='BB' THEN '3|'||CCY||'|'||BAL||'|'||CL_CD||'|'
              WHEN AABBCC='BBCC' THEN '4|'||CCY||DEBT_CD||'|'||BAL||'|'||CL_CD||'|' END DATA
         , MBR_CD BR_CD, RPT_DT, A.TT02G_KEY DATAKEY
  FROM CIC_TT02G A WHERE FILE_NAME=P_FILE_NAME AND FILE_TP='G1'

  ) XX
  ORDER BY BR_CD, DATAKEY;

END IF;
EXCEPTION
    WHEN ZERO_DIVIDE
    THEN
        DBMS_OUTPUT.PUT_LINE ('Attempt to divide by 0');
END;

PROCEDURE PR_GET_CIC_DATA_REPORT (P_FILE_NAME NVARCHAR2, P_FILE_TYPE NVARCHAR2,P_FROM NVARCHAR2, P_TO NVARCHAR2  , p_out OUT SYS_REFCURSOR)
AS
V_I_FROM NUMBER;
V_I_TO NUMBER;
BEGIN
V_I_FROM := TO_NUMBER(P_FROM);
V_I_TO := TO_NUMBER(P_TO);

IF P_FILE_TYPE='HEADER' THEN
  OPEN p_out FOR
  SELECT 'KB001|KB002|10000000' DATA
  FROM DUAL; 
END IF;
IF P_FILE_TYPE='SBV_BRANCH' THEN
  OPEN p_out FOR
  SELECT REF_CODE BR_CD, REF_NAME_VN DATA
  FROM SYS_REFCODE 
  WHERE REF_GROUP='LS_SBV_BRANCH'; 
END IF;

IF P_FILE_TYPE='K1021' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU1_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM; 
END IF;

IF P_FILE_TYPE='K1011' THEN --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU2_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K113' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU3_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3111' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU4_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'WB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3121' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU4_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'RB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3113' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU5_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'WB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3123' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU5_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'RB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3213' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU6_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'WB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3223' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU6_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'RB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K3331' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU7_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K401' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU8_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'WB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K402' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU8_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME and khoi = 'RB'
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K2' THEN --TODO: CHECK L?I XEM PH?N N? пU N? CU?I TH? HI?N TH? NÀO
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(select * from (
  select DISTINCT '1|'||CST_CD||'|'||CST_NM||'|'||
                 chr(10)||'2|'||FIN_YEAR||'|'||UNIT||'|'||
                 chr(10)||'3|'||CCY_CD||'|'||IS_AUDIT||'|'||
                 chr(10)||'4|'||IS_CONSOLIDATED||'|'DATA
         , BR_CD, RPT_DT, A.FINANCIAL_KEY DATAKEY
  FROM CIC_FINANCIAL A WHERE FILE_NAME=P_FILE_NAME

  UNION ALL
  select ITEM_CD||'|'||OPEN_BAL||'|' DATA
         , BR_CD, RPT_DT, A.FINANCIAL_KEY DATAKEY
  FROM CIC_FINANCIAL A WHERE FILE_NAME=P_FILE_NAME


  ) XX
  ORDER BY BR_CD, DATAKEY)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='K501' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU10_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='T02DS' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU11_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

IF P_FILE_TYPE='T02G1' THEN  --DONE
  OPEN p_out FOR
  SELECT * FROM (SELECT * FROM (
  SELECT ROWNUM STT,XX.*
  FROM(SELECT narrative DATA, '' DATAKEY, A.NGAY_PS
  FROM RPT_CIC_MAU12_TEXT A
  WHERE A.FILE_NAME=P_FILE_NAME
  ORDER BY A.ID)XX) WHERE STT<V_I_TO) WHERE STT>=V_I_FROM;

END IF;

EXCEPTION
    WHEN ZERO_DIVIDE
    THEN
        DBMS_OUTPUT.PUT_LINE ('Attempt to divide by 0');
END;

PROCEDURE PR_CREATED_FILE_CIC (P_REPORT_MONTH NVARCHAR2, 
                                P_USER NVARCHAR2,
                                P_CHECK_SUM_MD5 NVARCHAR2,
                                P_ERROR_CODE NVARCHAR2,
                                P_ERROR_MSG NVARCHAR2,
                                P_FILE_NAME NVARCHAR2,
                                P_FILE_PATH NVARCHAR2,
                                P_FILE_SIZE NUMBER , 
                                P_FILE_TYPE NVARCHAR2,
                                P_FILE_PATH_ENCODE NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN



  UPDATE LOG_REPORT_FILE A
  SET CHECK_SUM_MD5 = P_CHECK_SUM_MD5,
      ERROR_CODE = P_ERROR_CODE,
      ERROR_MSG = P_ERROR_MSG,
    --  FILE_NAME = P_FILE_NAME,
      FILE_PATH = P_FILE_PATH,
      FILE_SIZE = P_FILE_SIZE,
      FILE_STATUS = 'REVIEWING',
      --FILE_TYPE = P_FILE_TYPE,
      UPDATED_DATE = SYSDATE,
      UPDATED_USER = P_USER,
      FILE_PATH_ENCODE = P_FILE_PATH_ENCODE
  WHERE A.CHANNEL='CIC' AND FILE_NAME = P_FILE_NAME AND FILE_STATUS='CREATED';

  OPEN p_out FOR
    SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE  A 
    LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT'  
    WHERE A.CHANNEL in ('CIC','CICU') AND FILE_NAME = P_FILE_NAME;

  COMMIT;
END;


PROCEDURE PR_UPDATE_CIC_RESPONSE (p_file_name NVARCHAR2,
                                 p_cic_status VARCHAR2, 
                                 p_cic_response clob,
                                 p_error_msg VARCHAR2,
                                 p_user NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN
/*
CREATED  ?㠴?o xong d? li?u
REVIEWING  - ?ang xem x鴠d? li?u: Sau khi ETL xong.
REJECTED  - D? li?u c?n ki?m tra l?i: Tr?ng th᩠sau khi t? ch?i duy?t file.
APPROVED  - D? li?u ???c xᣠnh?n: Tr?ng th᩠sau khi duy?t file.
SENDING  - File ?ang g?i: Tr?ng th᩠?ang g?i file sang CIC sau khi duy?t file.
SENT  - File g?i thந c𮧺 Tr?ng th᩠sau khi g?i file sang CIC thந c𮧮
SEND_ERROR  - File g?i b? l?i: Tr?ng th᩠sau khi g?i file sang CIC b? l?i.
CIC_ERROR  - CIC x? lý c󠬿i: Tr?ng th᩠CIC g?i v? c󠬿i.
*/

  UPDATE LOG_REPORT_FILE A
  SET CIC_STATUS=p_cic_status,
      CIC_UPDATE_DATE = SYSDATE, 
      error_msg=case when p_error_msg is null then error_msg else p_error_msg end,
      cic_response='<PHTepBaoCaoVanTin>'||replace(p_cic_response,'<?xml version="1.0" encoding="UTF-8" standalone="yes"?>','')||'</PHTepBaoCaoVanTin>'      
  WHERE A.CHANNEL='CIC' AND FILE_NAME=p_file_name AND FILE_STATUS='SENT';

   OPEN p_out FOR
    SELECT A.* , B.REF_NAME_VN STATUS_NAME
    FROM LOG_REPORT_FILE  A
    LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT' 
    WHERE A.CHANNEL='CIC' AND FILE_NAME=p_file_name AND FILE_STATUS='SENT';

  COMMIT;
END;


PROCEDURE PR_GET_LOG_REPORT_FILE (p_file_name NVARCHAR2,
                                 p_user NVARCHAR2,
                                p_out OUT SYS_REFCURSOR)
AS
V_CHECK_EXISTS INT;

BEGIN 

   OPEN p_out FOR
    SELECT A.* 
            ,B.REF_NAME_VN STATUS_NAME 
            ,NVL(C.REF_NAME_VN,'N/A') CIC_STATUS_NAME
            ,to_char(CIC_UPDATE_DATE,'DD/MM/YYYY HH24:mi') CIC_UPDATE_DATE_STR
            ,to_char(SENDED_DATE,'DD/MM/YYYY HH24:mi') SENDED_DATE_STR
    FROM LOG_REPORT_FILE  A
    LEFT JOIN SYS_REFCODE B ON A.FILE_STATUS=B.REF_CODE AND B.REF_GROUP='STATUS_REPORT' 
    LEFT JOIN SYS_REFCODE C ON A.CIC_STATUS=C.REF_CODE AND C.REF_GROUP='CIC_REPORT_STATUS'
    WHERE FILE_NAME=p_file_name;

  COMMIT;
END;
END PCK_DATA_REPORT;