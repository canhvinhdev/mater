--------------------------------------------------------
--  File created - Monday-March-04-2024   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Package PCK_CIS_REQUEST
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "CIS_OPS_NCB"."PCK_CIS_REQUEST" AS
  /* DoNB 26/03/2019 */
  /* TODO enter package declarations (types, exceptions, methods etc) here */ 

    PROCEDURE PR_CREATE_CIS_REQUEST (
        p_id CIS_REQUEST.ID%TYPE,
        p_cis_no CIS_REQUEST.CIS_NO%TYPE,
        p_channel CIS_REQUEST.CHANNEL%TYPE,
        p_customer_type CIS_REQUEST.CUSTOMER_TYPE%TYPE,
        p_status CIS_REQUEST.STATUS%TYPE,
        p_product_code CIS_REQUEST.PRODUCT_CODE%TYPE,
        p_member_code CIS_REQUEST.MEMBER_CODE%TYPE,
        p_cic_code CIS_REQUEST.CIC_CODE%TYPE,
        p_id_no CIS_REQUEST.ID_NO%TYPE,
        p_tax_code CIS_REQUEST.TAX_CODE%TYPE,
        p_username_request CIS_REQUEST.USERNAME_REQUEST%TYPE,
        p_branch_code CIS_REQUEST.BRANCH_CODE%TYPE,
        p_created_date CIS_REQUEST.CREATED_DATE%TYPE,
        p_requested_date CIS_REQUEST.REQUESTED_DATE%TYPE,
        p_request_data CIS_REQUEST.REQUEST_DATA%TYPE,
        p_err_code CIS_REQUEST.ERR_CODE%TYPE,
        p_err_msg CIS_REQUEST.ERR_MSG%TYPE,
        p_address CIS_REQUEST.ADDRESS%TYPE,
        p_register_no CIS_REQUEST.REGISTER_NO%TYPE,
        p_note CIS_REQUEST.NOTE%TYPE,
        p_customer_name CIS_REQUEST.CUSTOMER_NAME%TYPE,
        p_customer_code CIS_REQUEST.CUSTOMER_CODE%TYPE,
        p_response_date CIS_REQUEST.RESPONSE_DATE%TYPE,
        p_email CIS_REQUEST.EMAIL%TYPE,
        p_last_version CIS_REQUEST.LAST_VERSION%TYPE,
        p_flag CIS_REQUEST.FLAG%TYPE,
        p_msg_id CIS_REQUEST.MSG_ID%TYPE,
        p_application_id CIS_REQUEST.APPLICATION_ID%TYPE,
        p_maker CIS_REQUEST.MAKER%TYPE,
        p_task_id CIS_REQUEST.TASK_ID%TYPE,
        p_encode_request cis_request.encode_request%TYPE,
        p_borrower CIS_REQUEST.BORROWER%TYPE,
        p_pcb_code CIS_REQUEST.PCB_CODE%TYPE,
        p_ccy CIS_REQUEST.CCY%TYPE,
        p_amount_fin_capital CIS_REQUEST.AMOUNT_FIN_CAPITAL%TYPE,
        p_total_instalment CIS_REQUEST.TOTAL_INSTALMENT%TYPE,
        p_credit_limit CIS_REQUEST.CREDIT_LIMIT%TYPE,
        p_gender CIS_REQUEST.GENDER%TYPE,
        p_dob CIS_REQUEST.DOB%TYPE,
        p_doc_type CIS_REQUEST.DOC_TYPE%TYPE,
        p_pay_periodicity CIS_REQUEST.PAY_PERIODICITY%TYPE,
        p_operation_type CIS_REQUEST.OPERATION_TYPE%TYPE,
        p_country_of_birth CIS_REQUEST.COUNTRY_OF_BIRTH%TYPE,
        p_request_id CIS_REQUEST.REQUEST_ID%TYPE,
        p_frequent_contacts CIS_REQUEST.FREQUENT_CONTACTS%TYPE,
        p_phone_number CIS_REQUEST.PHONE_NUMBER%TYPE,
        p_user varchar2,
        p_client_ip varchar2,
        p_user_agent varchar2,
        p_nam_tai_chinh varchar2,
        p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_UPDATE_STATUS_CIS_REQUEST (
        p_cis_no CIS_REQUEST.CIS_NO%TYPE,
        p_status CIS_REQUEST.STATUS%TYPE,
        p_request_data CIS_REQUEST.REQUEST_DATA%TYPE,
        p_msg_id CIS_REQUEST.MSG_ID%TYPE,
        p_err_code CIS_REQUEST.ERR_CODE%TYPE,
        p_err_msg CIS_REQUEST.ERR_MSG%TYPE,
        p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_GET_LIST_CIS_REQUEST (
        p_id_no CIS_REQUEST.ID_NO%TYPE,
        p_member_code CIS_REQUEST.MEMBER_CODE%TYPE,
        p_register_no CIS_REQUEST.REGISTER_NO%TYPE,
        p_customer_name CIS_REQUEST.CUSTOMER_NAME%TYPE,
        p_tax_code CIS_REQUEST.TAX_CODE%TYPE,
        p_address CIS_REQUEST.ADDRESS%TYPE,
        p_customer_type CIS_REQUEST.CUSTOMER_TYPE%TYPE,
        p_cic_code CIS_REQUEST.CIC_CODE%TYPE,
        p_customer_code CIS_REQUEST.CUSTOMER_CODE%TYPE,
        p_product_code CIS_REQUEST.PRODUCT_CODE%TYPE,
        p_cis_no CIS_REQUEST.CIS_NO%TYPE,
        p_maker CIS_REQUEST.MAKER%TYPE,
        p_from_date CIS_REQUEST.REQUESTED_DATE%TYPE,
        p_to_date CIS_REQUEST.REQUESTED_DATE%TYPE,
        p_task_id CIS_REQUEST.TASK_ID%TYPE,
        p_status CIS_REQUEST.STATUS%TYPE,
        p_channel CIS_REQUEST.CHANNEL%TYPE,
        p_user varchar2,
        p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_GET_CIS_REQUEST_INFO (
        p_cis_no CIS_REQUEST.ID_NO%TYPE,
        p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_CHECK_REQUEST_INFO ( p_param1 varchar2,
                                      p_param2 varchar2,
                                      p_param3 varchar2,
                                      p_param4 varchar2,
                                      p_param5 varchar2,
                                      p_param6 varchar2,
                                      p_param7 varchar2,
                                      p_param8 varchar2,
                                      p_channel varchar2,
                                      p_user varchar2,
                                      p_client_ip varchar2,
                                      p_user_agent varchar2,
                                      p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_CHECK_BATCH_REQUEST_INFO (p_param1 varchar2,
                                        p_param2 varchar2,
                                        p_param3 varchar2,
                                        p_param4 varchar2,
                                        p_param5 varchar2,
                                        p_param6 varchar2,
                                        p_param7 varchar2,
                                        p_param8 varchar2,
                                        p_channel varchar2,
                                        p_user varchar2,
                                        p_client_ip varchar2,
                                        p_user_agent varchar2,
                                        p_out    OUT SYS_REFCURSOR);

    PROCEDURE PR_GET_LOT_NO (
        p_user                         IN     VARCHAR2,
        p_client_ip                    IN     VARCHAR2,
        p_user_agent                   IN     VARCHAR2,
        p_out    OUT SYS_REFCURSOR);

   FUNCTION PR_STATUS_MATRIX_PCB( p_product_code  varchar2,
                                      p_id_no  varchar2,
                                      p_doc_type  varchar2,
                                      P_register_no varchar2 ) RETURN VARCHAR2;

   FUNCTION PR_STATUS_MATRIX_CIC(p_id_no CIS_REQUEST.ID_NO%TYPE,
                              p_register_no CIS_REQUEST.REGISTER_NO%TYPE,
                              p_tax_code CIS_REQUEST.TAX_CODE%TYPE,
                              p_customer_type CIS_REQUEST.CUSTOMER_TYPE%TYPE,
                              p_product_code CIS_REQUEST.PRODUCT_CODE%TYPE,
                              p_cic_code varchar2) RETURN VARCHAR2;

   FUNCTION PR_STATUS_MATRIX_TS ( p_phone_number varchar2,
                                      p_product_code varchar2,
                                      p_id_no varchar2) RETURN VARCHAR2;

   FUNCTION PR_CHECK_BLACK_LIST ( p_id_no varchar2) RETURN VARCHAR2;

   PROCEDURE PR_ADD_CIS_REQUEST_EMAIL (
        P_CIS_NO CIS_REQUEST.CIS_NO%TYPE,
        P_USER                         IN     VARCHAR2,
        P_CLIENT_IP                    IN     VARCHAR2,
        P_USER_AGENT                   IN     VARCHAR2,
        P_OUT    OUT SYS_REFCURSOR);

   PROCEDURE PR_GET_LIST_CIS_SENT (
        P_STATUS VARCHAR2,
        P_CHANNEL                         IN     VARCHAR2,
        P_USER                    IN     VARCHAR2,
        P_OUT    OUT SYS_REFCURSOR);

   --FIX Loi SENDDING - 7/4/2021
   PROCEDURE PR_GET_LIST_CIS_NEW (
        P_STATUS VARCHAR2,
        P_CHANNEL                         IN     VARCHAR2,
        P_USER                    IN     VARCHAR2,
        P_OUT    OUT SYS_REFCURSOR);

   PROCEDURE PR_AUTO_REJECT_REQUEST;

END PCK_CIS_REQUEST;

/
--------------------------------------------------------
--  DDL for Package PCK_CIS_DASHBOARD
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "CIS_OPS_NCB"."PCK_CIS_DASHBOARD" AS

/*
CREATE: CUONGNH
DESCRIPTION: TOP 10 BAN HOI TIN GAN NHAT
*/
PROCEDURE PR_LIST_TOP_REQUEST ( p_user varchar2,
                                p_client_ip varchar2,
                                p_user_agent varchar2,
                                p_out    OUT SYS_REFCURSOR) ;

/*
CREATE: CUONGNH
DESCRIPTION: SUMMARY ON MONTH
*/
PROCEDURE PR_LIST_REQUEST_MONTHLY ( p_user varchar2,
                                    p_client_ip varchar2,
                                    p_user_agent varchar2,
                                    p_out    OUT SYS_REFCURSOR) ;

/*
CREATE: CUONGNH
DESCRIPTION: SUMMARY ON MONTH
*/
PROCEDURE PR_LIST_REQ_PROD_MONTHLY ( p_user varchar2,
                                    p_client_ip varchar2,
                                    p_user_agent varchar2,
                                    p_out    OUT SYS_REFCURSOR) ;
/*
CREATE: CUONGNH
DESCRIPTION: TINH TOAN BIEU DO
*/
PROCEDURE PR_AGG_DASHBOARD;
/*
CREATE: CUONGNH
DESCRIPTION: VIEW CHAR
*/
PROCEDURE PR_LIST_CHAR ( p_user varchar2,
                          p_client_ip varchar2,
                          p_user_agent varchar2,
                          p_out    OUT SYS_REFCURSOR) ;

/*
CREATE: CUONGNH
DESCRIPTION: VIEW USERINFO
*/
PROCEDURE PR_USERINFO ( p_user varchar2,
                          p_client_ip varchar2,
                          p_user_agent varchar2,
                          p_out    OUT SYS_REFCURSOR) ;
END;



/
--------------------------------------------------------
--  DDL for Package Body PCK_CIS_DASHBOARD
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "CIS_OPS_NCB"."PCK_CIS_DASHBOARD" AS

/*
CREATE: CUONGNH
DESCRIPTION: TOP 10 BAN HOI TIN GAN NHAT
*/
PROCEDURE PR_LIST_TOP_REQUEST ( p_user varchar2,
                                p_client_ip varchar2,
                                p_user_agent varchar2,
                                p_out    OUT SYS_REFCURSOR)
AS
BEGIN

OPEN P_OUT FOR  
select * from (
SELECT A.ID, 
      A.CIS_NO, 
      A.CHANNEL, 
      A.CUSTOMER_TYPE, 
      A.STATUS, 
      A.PRODUCT_CODE, 
      A.MEMBER_CODE, 
      A.CIC_CODE, 
      A.ID_NO, 
      A.TAX_CODE, 
      A.USERNAME_REQUEST, 
      A.BRANCH_CODE, 
      TO_CHAR(A.CREATED_DATE,'DD/MM/YYYY') CREATED_DATE_STR, 
      A.REQUESTED_DATE, 
      A.REQUEST_DATA, 
      A.ERR_CODE, 
      A.ERR_MSG, 
      A.ADDRESS, 
      A.REGISTER_NO, 
      A.NOTE, 
      A.CUSTOMER_NAME, 
      A.CUSTOMER_CODE, 
      TO_CHAR(A.RESPONSE_DATE,'DD/MM/YYYY')  RESPONSE_DATE_STR,
      A.EMAIL, 
      A.LAST_VERSION, 
      A.FLAG, 
      A.MSG_ID, 
      A.APPLICATION_ID, 
      A.MAKER, 
      A.TASK_ID, 
      A.ENCODE_REQUEST, 
      A.BORROWER, 
      A.PCB_CODE, 
      A.CCY, 
      A.AMOUNT_FIN_CAPITAL, 
      A.TOTAL_INSTALMENT, 
      A.CREDIT_LIMIT, 
      A.GENDER, 
      A.DOB, 
      A.DOC_TYPE, 
      A.PAY_PERIODICITY, 
      A.OPERATION_TYPE, 
      A.COUNTRY_OF_BIRTH, 
      A.PHONE_NUMBER, 
      A.FREQUENT_CONTACTS, 
      A.REQUEST_ID, 
      A.USER_, 
      A.CLIENT_IP, 
      A.USER_AGENT, 
      refStatus.REF_NAME_VN STATUS_STR,
      refDocType.REF_NAME_VN DOC_TYPE_STR,
      refCustomerType.REF_NAME_VN CUSTOMER_TYPE_STR,
      B.REF_NAME_VN PRODUCT_NAME
FROM   CIS_REQUEST A
LEFT JOIN SYS_REFCODE refStatus ON A.STATUS = refStatus.REF_CODE AND refStatus.REF_GROUP = 'STATUS_REQUEST'
LEFT JOIN SYS_REFCODE refCustomerType ON A.CUSTOMER_TYPE = refCustomerType.REF_CODE AND refCustomerType.REF_GROUP = 'LOAI_KH'
LEFT JOIN SYS_REFCODE refDocType ON A.DOC_TYPE = refDocType.REF_CODE AND refDocType.REF_GROUP = 'DOC_TYPE'
LEFT JOIN SYS_REFCODE B ON A.PRODUCT_CODE = B.REF_CODE AND B.REF_GROUP = 'LS_PRODUCT'
WHERE A.MAKER = P_USER 
ORDER BY CREATED_DATE DESC,REQUESTED_DATE DESC ) AA
WHERE ROWNUM<=10;
END;

/*
CREATE: CUONGNH
DESCRIPTION: SUMMARY ON MONTH
*/
PROCEDURE PR_LIST_REQUEST_MONTHLY ( p_user varchar2,
                                    p_client_ip varchar2,
                                    p_user_agent varchar2,
                                    p_out    OUT SYS_REFCURSOR)
AS
BEGIN

OPEN P_OUT FOR  
SELECT COUNT(9) TOTAL_REQUEST, TO_NUMBER(TO_CHAR(A.CREATED_DATE,'DD')) DAYS
FROM   CIS_REQUEST A
WHERE A.MAKER = P_USER AND TO_CHAR(A.CREATED_DATE,'MMYYYY')=TO_CHAR(SYSDATE,'MMYYYY')
GROUP BY TO_NUMBER(TO_CHAR(A.CREATED_DATE,'DD'))
ORDER BY DAYS;


END;

/*
CREATE: CUONGNH
DESCRIPTION: SUMMARY ON MONTH
*/
PROCEDURE PR_LIST_REQ_PROD_MONTHLY ( p_user varchar2,
                                    p_client_ip varchar2,
                                    p_user_agent varchar2,
                                    p_out    OUT SYS_REFCURSOR)
AS
BEGIN

OPEN P_OUT FOR  
SELECT PKG_UTILITY.FORMAT_NUMBER(COUNT(9)) TOTAL_REQUEST,
       A.PRODUCT_CODE,
       B.REF_NAME_VN PRODUCT_NAME,
       A.CHANNEL,
       PKG_UTILITY.FORMAT_NUMBER(SUM(CASE WHEN A.IS_DATA='Y' THEN C.NORMAL_PRICE ELSE C.NON_NORMAL_PRICE END)) TOTAL_AMOUNT
FROM   CIS_REQUEST A
LEFT JOIN SYS_PRICE C ON A.PRODUCT_CODE=C.PRICE_CODE AND TRUNC(A.RESPONSE_DATE) BETWEEN TRUNC(C.EFFECTIVE_DATE) AND TRUNC(NVL(C.EXPIRATION_DATE,SYSDATE+100)) AND A.STATUS='RECEIVED'
LEFT JOIN SYS_REFCODE B ON A.PRODUCT_CODE = B.REF_CODE AND B.REF_GROUP = 'LS_PRODUCT'
WHERE A.MAKER = P_USER AND TO_CHAR(A.RESPONSE_DATE,'MMYYYY')=TO_CHAR(SYSDATE,'MMYYYY') AND A.STATUS='RECEIVED'
GROUP BY A.PRODUCT_CODE,
       B.REF_NAME_VN,
       A.CHANNEL
ORDER BY A.CHANNEL,A.PRODUCT_CODE;


END;
/*
CREATE: CUONGNH
DESCRIPTION: TINH TOAN BIEU DO
*/
PROCEDURE PR_AGG_DASHBOARD
AS
V_DAY_ID DATE;

BEGIN
V_DAY_ID := TRUNC(SYSDATE-1);

DELETE CIS_DASHBOARD WHERE to_char(DAY_ID,'YYYYMM') = to_char(sysdate,'YYYYMM');

INSERT INTO CIS_DASHBOARD(ID
                          ,USER_NAME
                          ,DAY_ID
                          ,NUMBER_OF_REQUSET
                          ,ESTIMATED_COST
                          ,CREATED_DATE
                          ,CHANNEL
                          ,PRODUCT_CODE)
SELECT SEQ_CIS_DASHBOARD.NEXTVAL ID, AA.*
FROM (SELECT A.MAKER USER_NAME
             ,TRUNC(A.RESPONSE_DATE) DAY_ID
             ,COUNT(9) NUMBER_OF_REQUSET
             ,SUM(C.NORMAL_PRICE) ESTIMATED_COST
             ,SYSDATE CREATED_DATE
             ,A.CHANNEL
             ,A.PRODUCT_CODE
      FROM   CIS_REQUEST A
      LEFT JOIN SYS_PRICE C ON A.PRODUCT_CODE=C.PRICE_CODE AND TRUNC(A.RESPONSE_DATE) BETWEEN TRUNC(C.EFFECTIVE_DATE) AND TRUNC(NVL(C.EXPIRATION_DATE,SYSDATE+100)) AND A.STATUS='RECEIVED'
      WHERE to_char(A.RESPONSE_DATE,'YYYYMM')=to_char(sysdate,'YYYYMM') AND A.STATUS='RECEIVED'
      GROUP BY A.PRODUCT_CODE,
             A.MAKER,
              TRUNC(A.RESPONSE_DATE),
             A.CHANNEL) AA;

COMMIT;
END;

/*
CREATE: CUONGNH
DESCRIPTION: VIEW CHAR
*/
PROCEDURE PR_LIST_CHAR ( p_user varchar2,
                        p_client_ip varchar2,
                        p_user_agent varchar2,
                        p_out    OUT SYS_REFCURSOR)
AS
BEGIN

  OPEN P_OUT FOR  
  select TO_CHAR(DAY_ID,'MM/YY') MONTHID,SUM(A.NUMBER_OF_REQUSET) NUMBER_OF_REQUSET,TO_CHAR(DAY_ID,'YYYYMM') MONTHID_ORDER
  from CIS_DASHBOARD A
  WHERE A.USER_NAME = p_user AND DAY_ID>ADD_MONTHS(SYSDATE,-12)
  GROUP BY TO_CHAR(DAY_ID,'MM/YY'),TO_CHAR(DAY_ID,'YYYYMM')
  ORDER BY MONTHID_ORDER;


END;


/*
CREATE: CUONGNH
DESCRIPTION: SUMMARY ON MONTH
*/
PROCEDURE PR_USERINFO ( p_user varchar2,
                        p_client_ip varchar2,
                        p_user_agent varchar2,
                        p_out    OUT SYS_REFCURSOR)
AS
BEGIN

OPEN P_OUT FOR  
SELECT A.FULL_NAME,A.JOB_TITLE,A.STATUS
FROM   SYS_USER A
WHERE A.USER_NAME = p_user ;


END;
END;

/
