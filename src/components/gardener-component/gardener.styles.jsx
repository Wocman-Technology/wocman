import styled from 'styled-components';
import Gardener from '../../assets/gardener.jpg'

export const GardenerWrapper = styled.section`
    display: flex;
    padding: 3rem 0 3rem 5rem;
    justify-content: flex-start;
    align-items: center;
    background: url(${Gardener});
    background-position: center center;
    background-repeat: no-repeat;
    object-fit: cover;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
    width: 100%;

    div {
        max-width: 50%;
        padding: 3rem 0rem;
        @media (max-width: 768px){
            max-width: 100%;
            text-align: center;
        }
    }

    h2 {
        font-size: 2.5rem;
        font-weight: 600;
        line-height: 144%;
        /* or 52px */

        color: #FFFFFF;
        @media (max-width: 768px){
            font-size: 1.5rem;
        }
    }
    @media (max-width: 768px){
        padding-left: 0rem;
        padding: 2rem;
        }
`

export const ButtonWrapper = styled.div`

    display: grid;
    max-width: 100% !important;
    grid-template-columns: 250px 250px;
    grid-gap: 1rem;
    button:first-child {
            min-height: 40px !important;
            text-align: center;
            padding-top: 8px !important;
            background: #778899 !important;
            box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.2);
            border-radius: 2px;
            color: #fff5ee;
            font-size: 0.7rem;
            @media (max-width: 768px){
                max-width: 250px;
                min-width: 250px;
                display: block;
                margin: 0 auto;
        }
          }

    button:not(:first-child) {
          min-height: 40px !important;
          text-align: center;
          padding-top: 8px !important;
          background: #fff5ee !important;
          box-shadow: 0px 5px 15px rgba(227, 184, 115, 0.2);
          border-radius: 2px;
          color: #552d1e;
          font-size: 0.7rem;
          @media (max-width: 768px){
                max-width: 250px;
                min-width: 250px;
                display: block;
                margin: 0 auto;
        }
        }

        @media (max-width: 768px){
            width: 100%;
            grid-template-columns: 1fr;
            grid-gap: 2rem;
            justify-content: center;
        }
`