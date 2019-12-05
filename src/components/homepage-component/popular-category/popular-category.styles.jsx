import styled from 'styled-components';


export const PopularCaregoryWrapper = styled.div` 
    width: 100%;
    margin: 3rem 0;

    h6 {
        margin-top: 1.4rem;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        /* identical to box height */

display: flex;
align-items: center;

/* brown */
color: #552D1E;
    }


    small {
        display: inline-block;
        margin-top: 2rem;
        font-size: 1rem;
        letter-spacing: 0.8px;
    }

    @media (max-width: 768px){
        text-align: center !important;
        justify-items: center;

        div {
           align-content: center;
           display: flex;
           justify-content: center;
        }
    }
`