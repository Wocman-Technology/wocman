import styled from 'styled-components';

export const NewsLetterWrapper = styled.div`
    display: grid;
    grid-template-columns: 1fr 1fr;
    background: #FFF5EE;
    height: 332px;


    div {
        width: 100%;
        text-align: start;
        padding: 5rem;

        h4 {
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 27px;
            /* identical to box height */

            /* brown */

            color: #552D1E;
        }

        p {
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 191.02%;
            /* or 27px */
            letter-spacing: 0.03em;
        }
    }

    div:nth-child(2) {
        display: flex;
        input {
            width: 250px;
            margin-right: 0.8rem;
            border: none;
            outline: none;
            padding: 0 1rem;
            height: 49px;
            background: #EFEFF7;
            border-radius: 5px;
        }
    }

    @media (max-width: 768px){
        grid-template-columns: 1fr;
        padding: 0;
        width: 100%;
        height: 100%;

        div{
            word-break: normal !important;
            width: 80%;
            margin: 0 auto;
            padding: 2rem !important;
            text-align: center;
            height: 100%;
        }
        div:nth-child(2) {
        display: flex;
        flex-direction: column;
        input {
            width: 200px;
            display: block;
            margin: 0 auto;
            margin-bottom: 1.8rem;
            border: none;
            outline: none;
            padding: 0 1rem;
            height: 49px;
            background: #EFEFF7;
            border-radius: 5px;
        }
        button.sc-bwzfXH.eIyaYk {
             max-width: 200px !important;
             margin: auto;
            }
    }
    }

`