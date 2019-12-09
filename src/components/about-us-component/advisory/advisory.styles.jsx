import styled from 'styled-components';
import Advisory from '../../../assets/advisory.svg'

export const AdvisoryWrapper = styled.article`

    display: grid;
    grid-template-columns: 1fr 2fr;
    margin: 5rem 0;
    padding: 0 4rem;

    div {
        p {
            font-style: normal;
            font-weight: normal;
            font-size: 1rem;
            word-break: normal;
            line-height: 225%;
            color: #363636;
        }
        @media (max-width: 768px){
            text-align: center;
        }
    }

    div:nth-child(2) {

        /* light */
        background: #FFF5EE;
        /* card */
        box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.06);
        padding: 7rem 4rem;
         @media (max-width: 768px){
        padding: 4rem 1.5rem;
    }

    }

    @media (max-width: 768px){
    grid-template-columns: 1fr;
    padding: 0 1rem;    
    }

`

export const DivWrapper = styled.div`
  background-image: url(${Advisory});
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: contain;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  z-index: 99;
  height: 305px;`